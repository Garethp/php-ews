<?php

namespace garethp\ews\Test\API;

use garethp\ews\API\Enumeration\DictionaryURIType;
use garethp\ews\API\Enumeration\UnindexedFieldURIType;
use garethp\ews\API\FieldURIManager;
use PHPUnit\Framework\TestCase;

class FieldURIManagerTest extends TestCase
{
    public function testGetFieldUrisFromClass()
    {
        $reflectionMethod = new \ReflectionMethod(FieldURIManager::class, 'getFieldUrisFromClass');
        $reflectionMethod->setAccessible(true);

        $dictionaryURIs = $reflectionMethod->invoke(new DictionaryURIType(), DictionaryURIType::class);
        $this->assertEquals('contacts:PhysicalAddress:City', $dictionaryURIs['physicaladdress']['contacts']['city']);
        $this->assertEquals('contacts:ImAddress', $dictionaryURIs['imaddress']['contacts']);

        $unindexedFieldURIs = $reflectionMethod->invoke(new DictionaryURIType(), UnindexedFieldURIType::class);
        $this->assertEquals('item:Body', $unindexedFieldURIs['body']['item']);
    }
}
