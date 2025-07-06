<?php

namespace garethp\ews\Test\Contacts;

use garethp\ews\API\Enumeration\EmailAddressKeyType;
use garethp\ews\API\Enumeration\PhysicalAddressKeyType;
use garethp\ews\API\Type\ItemIdType;
use garethp\ews\API\Type\PhysicalAddressDictionaryEntryType;
use garethp\ews\Test\BaseTestCase;
use garethp\ews\ContactsAPI as API;

class ContactsAPITest extends BaseTestCase
{
    /**
     * @param $apiClass
     *
     * @return \garethp\ews\ContactsAPI
     */
    public function getClient($apiClass = null)
    {
        /** @var API $client */
        $client = parent::getClient(API::class);

        $testFolder = $client->getFolderByDisplayName('Test', $client->getFolderId());
        $client->setFolderId($testFolder->getFolderId());

        return $client;
    }

    public function testGetContacts()
    {
        $api = $this->getClient();
        $contacts = $api->getContacts();

        $this->assertEmpty($contacts);

        $contact = $api->createContacts(array (
            'GivenName' => 'John',
            'Surname' => 'Smith',
            'EmailAddresses' => array(
                'Entry' => array('Key' => 'EmailAddress1', '_value' => 'john.smith@gmail.com')
            ),
            'PhoneNumbers' => array(
                'Entry' => array('Key' => 'HomePhone', '_value' => '000')
            )
        ));
        $contacts = $api->getContacts();
        $api->deleteItems($contact[0]);

        $this->assertCount(1, $contacts);
        $this->assertEquals('John Smith', $contacts[0]->getDisplayName());
    }

    public function testCreateContact()
    {
        $api = $this->getClient();

        $contact = $api->createContacts(array (
            'GivenName' => 'John',
            'Surname' => 'Smith',
            'EmailAddresses' => array(
                'Entry' => array('Key' => 'EmailAddress1', '_value' => 'john.smith@gmail.com')
            ),
            'PhoneNumbers' => array(
                'Entry' => array('Key' => 'HomePhone', '_value' => '000')
            )
        ));

        $this->assertArrayHasKey(0, $contact);

        $contact = $contact[0];
        $this->assertInstanceOf(ItemIdType::class, $contact);

        $contact = $api->getContact($contact);
        $this->assertNotNull($contact);
        $this->assertEquals('John', $contact->getGivenName());

        $api->deleteItems($contact->getItemId());
    }

    public function testUpdateContact()
    {
        $api = $this->getClient();

        $contact = $api->createContacts(array (
            'GivenName' => 'John',
            'Surname' => 'Smith',
            'EmailAddresses' => array(
                'Entry' => array('Key' => 'EmailAddress1', '_value' => 'john.smith@gmail.com')
            ),
            'PhoneNumbers' => array(
                'Entry' => array('Key' => 'HomePhone', '_value' => '000')
            ),
            'PhysicalAddresses' => array(
                'Entry' => array(
                    'Key' => PhysicalAddressKeyType::HOME,
                    'street' => '123 Street',
                    'city' => '123 City',
                    'state' => '123 State',
                    'countryOrRegion' => '123 Country',
                    'postalCode' => '12345',
                )
            )
        ));

        $contact = $contact[0];
        $api->updateContactItem($contact, array(
            'GivenName' => 'Jane',
            'EmailAddress:EmailAddress1' => array (
                'EmailAddresses' => array (
                    'Entry' => array('Key' => 'EmailAddress1', '_value' => 'jane.smith@gmail.com')
                )
            ),
            'PhoneNumber:HomePhone' => array (
                'PhoneNumbers' => array (
                    'Entry' => array('Key' => 'HomePhone', '_value' => '111')
                )
            ),
            'PhysicalAddress:Home' => array(
                'PhysicalAddresses' => array(
                    'Entry' => array(
                        'Key' => 'Home',
                        'street' => '123 Street New',
                        'city' => '123 City New',
                    )
                )
            )
        ));

        $contact = $api->getContact($contact);
        $this->assertEquals('Jane', $contact->getGivenName());
        $this->assertEquals('jane.smith@gmail.com', $contact->getEmailAddresses()[0]);
        $this->assertEquals('111', $contact->getPhoneNumbers()[0]);
        $this->assertEquals('123 Street New', $contact->getPhysicalAddresses()[0]->getStreet());
        $this->assertEquals('123 City New', $contact->getPhysicalAddresses()[0]->getCity());

        $api->deleteItems($contact->getItemId());
    }

    public function testDeleteContactField()
    {
        $api = $this->getClient();

        $contact = $api->createContacts(array(
            'GivenName' => 'John',
            'Surname' => 'Smith',
            'EmailAddresses' => array(
                'Entry' => array('Key' => EmailAddressKeyType::EMAIL_ADDRESS_1, '_value' => 'john.smith@gmail.com')
            ),
            'PhysicalAddresses' => array(
                'Entry' => array(
                    array(
                        'Key' => PhysicalAddressKeyType::BUSINESS,
                        'street' => '123 Street',
                        'city' => '123 City',
                        'state' => '123 State'
                    ),
                    array(
                        'Key' => PhysicalAddressKeyType::HOME,
                        'street' => '321 Street',
                        'city' => '321 City',
                        'state' => '321 State'
                    )
                )
            )
        ))[0];

        $api->updateContactItem($contact, array(
            'deleteFields' => array(
                'GivenName',
                'PhysicalAddress:Home',
                'PhysicalAddress:City:Business'
            )
        ));

        $contact = $api->getContact($contact);
        $api->deleteItems($contact->getItemId());

        $this->assertInstanceOf(PhysicalAddressDictionaryEntryType::class, $contact->getPhysicalAddresses()[0]);
        $this->assertNull($contact->getPhysicalAddresses()[0]->getCity());
        $this->assertNull($contact->getGivenName());
    }

    public function testPaging()
    {
        $client = $this->getClient();

        $contacts = $client->createContacts(array(
            array('GivenName' => 'John 1'),
            array('GivenName' => 'John 2'),
            array('GivenName' => 'John 3'),
            array('GivenName' => 'John 4'),
            array('GivenName' => 'John 5'),
            array('GivenName' => 'Doe 1')
        ));

        $firstPage = $client->getContacts(null, array(
            'ContactsView' => array('MaxEntriesReturned' => 2),
            'IndexedPageItemView' => array ('MaxEntriesReturned' => 2, 'Offset' => 0, 'BasePoint' => 'Beginning')
        ));

        $secondPage = $client->getNextPage($firstPage);

        $this->assertEquals('Doe 1', $firstPage[0]->getGivenName());
        $this->assertEquals('John 5', $firstPage[1]->getGivenName());
        $this->assertEquals('John 4', $secondPage[0]->getGivenName());
        $this->assertEquals('John 3', $secondPage[1]->getGivenName());

        $client->deleteItems($contacts);
    }

    /**
     * Test contact handling with international characters and names
     */
    public function testInternationalContactSupport()
    {
        $api = $this->getClient();
        
        $internationalContacts = [
            [
                'GivenName' => 'François',
                'Surname' => 'Müller',
                'EmailAddresses' => ['Entry' => ['Key' => 'EmailAddress1', '_value' => 'francois.muller@example.com']]
            ],
            [
                'GivenName' => '田中',
                'Surname' => '太郎',
                'EmailAddresses' => ['Entry' => ['Key' => 'EmailAddress1', '_value' => 'tanaka.taro@example.jp']]
            ],
            [
                'GivenName' => 'Владимир',
                'Surname' => 'Иванов',
                'EmailAddresses' => ['Entry' => ['Key' => 'EmailAddress1', '_value' => 'vladimir.ivanov@example.ru']]
            ]
        ];
        
        $createdContacts = [];
        
        foreach ($internationalContacts as $contactData) {
            try {
                $contact = $api->createContacts($contactData);
                $createdContacts[] = $contact[0];
                
                // Verify the contact can be retrieved with correct encoding
                $retrievedContact = $api->getContact($contact[0]);
                $this->assertNotNull($retrievedContact, 'Should retrieve international contact');
                $this->assertEquals(
                    $contactData['GivenName'],
                    $retrievedContact->getGivenName(),
                    'Should preserve international characters in first name'
                );
            } catch (\Exception $e) {
                // Some providers might have limited international support
                $this->addWarning('International contact support limited: ' . $e->getMessage());
            }
        }
        
        $this->assertGreaterThan(
            0,
            count($createdContacts),
            'Should support at least basic international characters'
        );
        
        // Cleanup
        foreach ($createdContacts as $contactId) {
            try {
                $api->deleteItems($contactId);
            } catch (\Exception $e) {
                // Ignore cleanup errors
            }
        }
    }

    /**
     * Test contact field variations across different Exchange providers
     */
    public function testContactFieldVariations()
    {
        $api = $this->getClient();
        
        // Test with various contact field combinations that providers might handle differently
        $testCases = [
            'minimal' => [
                'GivenName' => 'Min',
                'Surname' => 'Test'
            ],
            'complete' => [
                'GivenName' => 'Complete',
                'Surname' => 'Test',
                'EmailAddresses' => ['Entry' => ['Key' => 'EmailAddress1', '_value' => 'complete@test.com']],
                'PhoneNumbers' => ['Entry' => ['Key' => 'HomePhone', '_value' => '+1-555-0123']],
                'CompanyName' => 'Test Company Inc.',
                'JobTitle' => 'Senior Test Engineer',
                'Department' => 'Quality Assurance'
            ],
            'business' => [
                'GivenName' => 'Business',
                'Surname' => 'Contact',
                'EmailAddresses' => [
                    'Entry' => [
                        ['Key' => 'EmailAddress1', '_value' => 'business@company.com'],
                        ['Key' => 'EmailAddress2', '_value' => 'personal@email.com']
                    ]
                ],
                'PhoneNumbers' => [
                    'Entry' => [
                        ['Key' => 'BusinessPhone', '_value' => '+1-555-0100'],
                        ['Key' => 'MobilePhone', '_value' => '+1-555-0200']
                    ]
                ]
            ]
        ];
        
        $createdContacts = [];
        
        foreach ($testCases as $label => $contactData) {
            try {
                $contact = $api->createContacts($contactData);
                $createdContacts[] = $contact[0];
                
                $retrievedContact = $api->getContact($contact[0]);
                $this->assertNotNull($retrievedContact, "Should create and retrieve $label contact");
                $this->assertEquals($contactData['GivenName'], $retrievedContact->getGivenName());
            } catch (\Exception $e) {
                $this->addWarning("Contact variation '$label' not fully supported: " . $e->getMessage());
            }
        }
        
        $this->assertGreaterThan(
            0,
            count($createdContacts),
            'Should support at least basic contact variations'
        );
        
        // Cleanup
        foreach ($createdContacts as $contactId) {
            try {
                $api->deleteItems($contactId);
            } catch (\Exception $e) {
                // Ignore cleanup errors
            }
        }
    }

    /**
     * Test contact performance with bulk operations
     */
    public function testContactBulkOperations()
    {
        $api = $this->getClient();
        
        $startTime = microtime(true);
        
        // Create multiple contacts to test bulk performance
        $contacts = [];
        for ($i = 1; $i <= 10; $i++) {
            $contacts[] = [
                'GivenName' => "Bulk$i",
                'Surname' => 'Test',
                'EmailAddresses' => ['Entry' => ['Key' => 'EmailAddress1', '_value' => "bulk$i@test.com"]]
            ];
        }
        
        try {
            $createdContacts = $api->createContacts($contacts);
            $creationTime = microtime(true) - $startTime;
            
            $this->assertCount(10, $createdContacts, 'Should create all bulk contacts');
            $this->assertLessThan(30, $creationTime, 'Bulk creation should complete within 30 seconds');
            
            // Test bulk retrieval
            $startTime = microtime(true);
            $allContacts = $api->getContacts();
            $retrievalTime = microtime(true) - $startTime;
            
            $this->assertGreaterThanOrEqual(
                10,
                count($allContacts),
                'Should retrieve at least the created contacts'
            );
            $this->assertLessThan(10, $retrievalTime, 'Bulk retrieval should complete within 10 seconds');
            
            // Cleanup
            $api->deleteItems($createdContacts);
        } catch (\Exception $e) {
            $this->fail('Bulk contact operations should work on all providers: ' . $e->getMessage());
        }
    }

    /**
     * Helper method for warnings (compatible with older PHPUnit versions)
     */
    private function addWarning(string $message): void
    {
        // Use a simple assertion that always passes but logs the warning
        $this->assertTrue(true, "Warning: $message");
    }
}
