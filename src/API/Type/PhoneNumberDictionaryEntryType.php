<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing PhoneNumberDictionaryEntryType
 *
 *
 * XSD Type: PhoneNumberDictionaryEntryType
 *
 * @method PhoneNumberDictionaryEntryType setKey(string $key)
 */
class PhoneNumberDictionaryEntryType extends Type
{

    /**
     * @var string
     */
    protected $key = null;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
}
