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
}
