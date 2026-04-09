<?php

namespace garethp\ews\Test\API;

use garethp\ews\API\Type\InternetHeaderType;
use garethp\ews\API\Type\ItemType;
use garethp\ews\API\Type\BodyType;
use garethp\ews\API\Type\MimeContentType;
use garethp\ews\API\Type\AttachmentType;
use garethp\ews\API\Type\ExtendedPropertyType;
use garethp\ews\API\Type\PathToExtendedFieldType;
use garethp\ews\API\Type\SingleRecipientType;
use garethp\ews\API\Type\EmailAddressType;
use garethp\ews\API\Type\FolderType;
use garethp\ews\API\Type\PermissionSetType;
use garethp\ews\API\Type\PermissionType;
use PHPUnit\Framework\TestCase;

class TypeConverterTest extends TestCase
{
    public function testConvertStdClassToMessageHeaders()
    {
        $item = new ItemType();
        
        // Simulate SOAP assigning stdClass objects
        $soapData = [
            (object)['HeaderName' => 'X-Priority', '_' => '1'],
            (object)['HeaderName' => 'X-Mailer', '_' => 'Test-Mailer']
        ];
        
        // This triggers __set() which should auto-convert
        $item->internetMessageHeaders = $soapData;
        
        $headers = $item->getInternetMessageHeaders();
        
        $this->assertIsArray($headers, 'Expected internetMessageHeaders to be an array');
        $this->assertCount(2, $headers, 'Expected 2 headers to be converted');
        $this->assertInstanceOf(InternetHeaderType::class, $headers[0], 'First header should be InternetHeaderType');
        $this->assertInstanceOf(InternetHeaderType::class, $headers[1], 'Second header should be InternetHeaderType');
        $this->assertEquals('X-Priority', $headers[0]->getHeaderName(), 'First header name should be X-Priority');
        $this->assertEquals('X-Mailer', $headers[1]->getHeaderName(), 'Second header name should be X-Mailer');
    }
    
    public function testConvertStdClassToMimeContent()
    {
        $item = new ItemType();
        
        // Simulate SOAP assigning stdClass for MimeContent
        $soapData = (object)[
            'CharacterSet' => 'UTF-8',
            '_' => 'base64encodedcontent'
        ];
        
        $item->mimeContent = $soapData;
        
        $mimeContent = $item->getMimeContent();
        
        $this->assertInstanceOf(MimeContentType::class, $mimeContent, 'Expected mimeContent to be MimeContentType');
        $this->assertEquals('UTF-8', $mimeContent->getCharacterSet(), 'Expected CharacterSet to be UTF-8');
        $this->assertEquals('base64encodedcontent', $mimeContent->_, 'Expected _ to match base64encodedcontent');
    }

    public function testConvertStdClassToBody()
    {
        $item = new ItemType();
        
        // Simulate SOAP assigning stdClass for Body
        $soapData = (object)[
            'BodyType' => 'HTML',
            '_' => '<html><body>Test</body></html>'
        ];
        
        $item->body = $soapData;
        
        $body = $item->getBody();
        
        $this->assertInstanceOf(BodyType::class, $body, 'Expected body to be BodyType');
        $this->assertEquals('HTML', $body->getBodyType(), 'Expected BodyType to be HTML');
        $this->assertEquals('<html><body>Test</body></html>', $body->_, 'Expected _ to match HTML content');
    }

    public function testConvertStdClassToExtendedPropertyType()
    {
        $item = new ItemType();
        $soapData = [
            (object)[
                'ExtendedFieldURI' => (object)[
                    'PropertyTag' => '0x1234',
                    'PropertyType' => 'String'
                ],
                'Value' => 'TestValue'
            ]
        ];
        $item->extendedProperty = $soapData;
        $extProps = $item->getExtendedProperty();
        $this->assertIsArray($extProps, 'Expected extendedProperty to be an array');
        $this->assertCount(1, $extProps, 'Expected 1 extended property');
        $this->assertInstanceOf(ExtendedPropertyType::class, $extProps[0], 'Should be ExtendedPropertyType');
        $this->assertEquals('TestValue', $extProps[0]->getValue());
        $this->assertInstanceOf(PathToExtendedFieldType::class, $extProps[0]->getExtendedFieldURI());
        $this->assertEquals('0x1234', $extProps[0]->getExtendedFieldURI()->getPropertyTag());
    }

    public function testConvertStdClassToSingleRecipientType()
    {
        $recipient = new SingleRecipientType();
        // Simulate SOAP assigning stdClass for mailbox
        $soapData = (object)[
            'Name' => 'John Doe',
            'EmailAddress' => 'john.doe@example.com',
            'RoutingType' => 'SMTP',
            'MailboxType' => 'Mailbox'
        ];
        $recipient->mailbox = $soapData;
        $mailbox = $recipient->getMailbox();
        $this->assertInstanceOf(EmailAddressType::class, $mailbox, 'Expected mailbox to be EmailAddressType');
        $this->assertEquals('John Doe', $mailbox->getName(), 'Expected Name to match');
        $this->assertEquals('john.doe@example.com', $mailbox->getEmailAddress(), 'Expected emailAddress to match');
        $this->assertEquals('SMTP', $mailbox->getRoutingType(), 'Expected RoutingType to be SMTP');
        $this->assertEquals('Mailbox', $mailbox->getMailboxType(), 'Expected mailboxType to be Mailbox');
    }

    public function testConvertStdClassToFolderTypeProperties()
    {
        $folder = new FolderType();
        // Simulate SOAP assigning stdClass for permissionSet
        $soapPermissionSet = (object)[
            'Permissions' => (object)[
                'UserId' => (object)[
                    'SID' => 'S-1-5-21',
                    'PrimarySmtpAddress' => 'user@example.com'
                ],
                'canCreateItems' => true,
                'canCreateSubFolders' => true,
                'readItems' => 'All',
                'permissionLevel' => 'Editor',
            ]
        ];

        $folder->permissionSet = $soapPermissionSet;
        $permissionSet = $folder->getPermissionSet();
        $this->assertInstanceOf(PermissionSetType::class, $permissionSet, 'Expected permissionSet to be PermissionSetType');

        $permissions = $permissionSet->getPermissions();
        $this->assertIsArray($permissions, 'Permissions should be an array');
        $this->assertCount(1, $permissions, 'Expected 1 permission to be present');
        $this->assertInstanceOf(PermissionType::class, $permissions[0], 'Should be PermissionType');
        $this->assertEquals('Editor', $permissions[0]->getPermissionLevel(), 'Permission level should be Editor');
        $this->assertEquals('S-1-5-21', $permissions[0]->getUserId()->getSID(), 'User SID should match');
        $this->assertEquals('user@example.com', $permissions[0]->getUserId()->getPrimarySmtpAddress(), 'User email should match');

        // Test normal assignment for unreadCount
        $folder->unreadCount = 42;
        $this->assertEquals(42, $folder->getUnreadCount(), 'Expected unreadCount to match');
    }

    public function testHandlesNonStdClassData()
    {
        $item = new ItemType();
        
        // Regular typed object should pass through unchanged
        $properHeader = new InternetHeaderType();
        $properHeader->setHeaderName('Test');
        $item->internetMessageHeaders = [$properHeader];
        
        $headers = $item->getInternetMessageHeaders();
        
        $this->assertIsArray($headers, 'Expected internetMessageHeaders to be an array');
        $this->assertCount(1, $headers, 'Expected 1 header to be present');
        $this->assertSame($properHeader, $headers[0], 'Expected header to match the original InternetHeaderType instance');
    }
}
