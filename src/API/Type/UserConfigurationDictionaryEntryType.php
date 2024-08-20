<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing UserConfigurationDictionaryEntryType
 *
 *
 * XSD Type: UserConfigurationDictionaryEntryType
 *
 * @method UserConfigurationDictionaryEntryType setDictionaryKey(UserConfigurationDictionaryObjectType $dictionaryKey)
 * @method UserConfigurationDictionaryEntryType setDictionaryValue(UserConfigurationDictionaryObjectType $dictionaryValue)
 */
class UserConfigurationDictionaryEntryType extends Type
{

    /**
     * @var \garethp\ews\API\Type\UserConfigurationDictionaryObjectType
     */
    protected $dictionaryKey = null;

    /**
     * @var \garethp\ews\API\Type\UserConfigurationDictionaryObjectType
     */
    protected $dictionaryValue = null;

    /**
     * @return UserConfigurationDictionaryObjectType
     */
    public function getDictionaryKey()
    {
        return $this->dictionaryKey;
    }

    /**
     * @return UserConfigurationDictionaryObjectType
     */
    public function getDictionaryValue()
    {
        return $this->dictionaryValue;
    }
}
