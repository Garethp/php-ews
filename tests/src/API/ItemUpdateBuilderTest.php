<?php

namespace garethp\ews\Test\API;

use garethp\ews\API\ClassMap;
use garethp\ews\API\ItemUpdateBuilder;
use garethp\ews\API\Type;
use PHPUnit\Framework\TestCase;

class ItemUpdateBuilderTest extends TestCase
{
    private $publicStringsUri = [
        'DistinguishedPropertySetId' => 'PublicStrings',
        'PropertyName' => 'MyProperty',
        'PropertyType' => 'String',
    ];

    public function testSetSingleExtendedProperty()
    {
        $property = ['ExtendedFieldURI' => $this->publicStringsUri, 'Value' => 'hello'];

        $updates = ItemUpdateBuilder::buildUpdateItemChanges('Contact', 'contacts', [
            'ExtendedProperty' => $property
        ]);

        $this->assertEquals([
            'SetItemField' => [
                [
                    'ExtendedFieldURI' => $this->publicStringsUri,
                    'Contact' => ['ExtendedProperty' => $property]
                ]
            ]
        ], $updates);
    }

    public function testSetMultipleExtendedPropertiesAlongsideNormalFields()
    {
        $first = ['ExtendedFieldURI' => $this->publicStringsUri, 'Value' => 'hello'];
        $second = ['ExtendedFieldURI' => ['PropertyTag' => '0x3A4F', 'PropertyType' => 'Integer'], 'Value' => 5];

        $updates = ItemUpdateBuilder::buildUpdateItemChanges('Contact', 'contacts', [
            'GivenName' => 'Jane',
            'ExtendedProperty' => [$first, $second]
        ]);

        $this->assertCount(3, $updates['SetItemField']);
        $this->assertEquals(['FieldURI' => 'contacts:GivenName'], $updates['SetItemField'][0]['FieldURI']);
        $this->assertEquals($first['ExtendedFieldURI'], $updates['SetItemField'][1]['ExtendedFieldURI']);
        $this->assertEquals(['ExtendedProperty' => $first], $updates['SetItemField'][1]['Contact']);
        $this->assertEquals($second['ExtendedFieldURI'], $updates['SetItemField'][2]['ExtendedFieldURI']);
        $this->assertEquals(['ExtendedProperty' => $second], $updates['SetItemField'][2]['Contact']);
    }

    public function testDeleteExtendedProperty()
    {
        $updates = ItemUpdateBuilder::buildUpdateItemChanges('Contact', 'contacts', [
            'deleteFields' => [
                'GivenName',
                ['ExtendedFieldURI' => $this->publicStringsUri],
            ]
        ]);

        $this->assertEquals([
            ['FieldURI' => ['FieldURI' => 'contacts:GivenName']],
            ['ExtendedFieldURI' => $this->publicStringsUri],
        ], $updates['DeleteItemField']);
    }

    public function testExtendedPropertyIsSerializedForUpdateItem()
    {
        $extendedProperty = new Type\ExtendedPropertyType();
        $extendedFieldUri = new Type\ExtendedFieldURI();
        $extendedFieldUri->setPropertyTag('0x3A4F');
        $extendedFieldUri->setPropertyType('String');
        $extendedProperty->setExtendedFieldURI($extendedFieldUri);
        $extendedProperty->setValue('from an object');

        $updates = ItemUpdateBuilder::buildUpdateItemChanges('Contact', 'contacts', [
            'ExtendedProperty' => [
                ['ExtendedFieldURI' => $this->publicStringsUri, 'Value' => 'hello'],
                $extendedProperty,
            ],
            'deleteFields' => [['ExtendedFieldURI' => ['PropertyName' => 'Old', 'PropertyType' => 'String',
                'DistinguishedPropertySetId' => 'PublicStrings']]]
        ]);

        $request = Type::buildFromArray([
            'ItemChanges' => [
                'ItemChange' => ['ItemId' => ['Id' => 'id', 'ChangeKey' => 'key'], 'Updates' => $updates]
            ],
            'MessageDisposition' => 'SaveOnly',
            'ConflictResolution' => 'AlwaysOverwrite',
        ]);

        $client = new class (
            __DIR__ . '/../../../Resources/wsdl/services.wsdl',
            [
                'classmap' => ClassMap::getClassMap(),
                'trace' => 1,
                'exceptions' => false,
                'location' => 'http://localhost'
            ]
        ) extends \SoapClient {
            public $lastRequest;

            public function __doRequest($request, $location, $action, $version, $oneWay = 0): ?string
            {
                $this->lastRequest = $request;

                return null;
            }
        };
        $client->UpdateItem($request);

        $xml = new \DOMDocument();
        $xml->loadXML($client->lastRequest);
        $xpath = new \DOMXPath($xml);
        $xpath->registerNamespace('t', 'http://schemas.microsoft.com/exchange/services/2006/types');

        $setFields = $xpath->query('//t:SetItemField');
        $this->assertEquals(2, $setFields->length);

        $first = $setFields->item(0);
        $uri = $xpath->query('t:ExtendedFieldURI', $first)->item(0);
        $this->assertEquals('MyProperty', $uri->getAttribute('PropertyName'));
        $this->assertEquals('PublicStrings', $uri->getAttribute('DistinguishedPropertySetId'));
        $nested = $xpath->query('t:Contact/t:ExtendedProperty/t:ExtendedFieldURI', $first)->item(0);
        $this->assertEquals('MyProperty', $nested->getAttribute('PropertyName'));
        $value = $xpath->query('t:Contact/t:ExtendedProperty/t:Value', $first)->item(0);
        $this->assertEquals('hello', $value->textContent);

        $second = $setFields->item(1);
        $uri = $xpath->query('t:ExtendedFieldURI', $second)->item(0);
        $this->assertEquals('0x3A4F', $uri->getAttribute('PropertyTag'));
        $value = $xpath->query('t:Contact/t:ExtendedProperty/t:Value', $second)->item(0);
        $this->assertEquals('from an object', $value->textContent);

        $deleted = $xpath->query('//t:DeleteItemField/t:ExtendedFieldURI');
        $this->assertEquals(1, $deleted->length);
        $this->assertEquals('Old', $deleted->item(0)->getAttribute('PropertyName'));
    }
}
