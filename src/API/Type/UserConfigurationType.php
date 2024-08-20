<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing UserConfigurationType
 *
 *
 * XSD Type: UserConfigurationType
 *
 * @method UserConfigurationType setUserConfigurationName(UserConfigurationNameType $userConfigurationName)
 * @method UserConfigurationType setItemId(ItemIdType $itemId)
 * @method UserConfigurationType addDictionary(UserConfigurationDictionaryEntryType $dictionary)
 * @method UserConfigurationType setDictionary(array $dictionary)
 * @method UserConfigurationType setXmlData(string $xmlData)
 * @method UserConfigurationType setBinaryData(string $binaryData)
 */
class UserConfigurationType extends Type
{

    /**
     * @var \garethp\ews\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \garethp\ews\API\Type\UserConfigurationDictionaryEntryType[]
     */
    protected $dictionary = null;

    /**
     * @var string
     */
    protected $xmlData = null;

    /**
     * @var string
     */
    protected $binaryData = null;

    /**
     * @return UserConfigurationNameType
     */
    public function getUserConfigurationName()
    {
        return $this->userConfigurationName;
    }

    /**
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return UserConfigurationDictionaryEntryType[]
     */
    public function getDictionary()
    {
        return $this->dictionary;
    }

    /**
     * @return string
     */
    public function getXmlData()
    {
        return $this->xmlData;
    }

    /**
     * @return string
     */
    public function getBinaryData()
    {
        return $this->binaryData;
    }
}
