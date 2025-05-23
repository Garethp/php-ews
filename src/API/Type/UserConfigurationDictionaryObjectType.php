<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing UserConfigurationDictionaryObjectType
 *
 *
 * XSD Type: UserConfigurationDictionaryObjectType
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
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return UserConfigurationDictionaryObjectType
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return UserConfigurationDictionaryObjectType
     */
    public function addValue($value)
    {
        if ($this->value === null) {
                        $this->value = array();
        }

        if (!is_array($this->value)) {
            $this->value = array($this->value);
        }

        $this->value[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return UserConfigurationDictionaryObjectType
     */
    public function setValue(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->value = $value;
        return $this;
    }
}
