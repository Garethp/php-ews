<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing UserConfigurationDictionaryObjectType
 *
 *
 * XSD Type: UserConfigurationDictionaryObjectType
 *
 * @method UserConfigurationDictionaryObjectType setType(string $type)
 * @method UserConfigurationDictionaryObjectType addValue(string $value)
 * @method UserConfigurationDictionaryObjectType setValue(array $value)
 */
class UserConfigurationDictionaryObjectType extends Type
{

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string[]
     */
    protected $value = null;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string[]
     */
    public function getValue()
    {
        return $this->value;
    }
}
