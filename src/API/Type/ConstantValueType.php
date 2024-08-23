<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ConstantValueType
 *
 *
 * XSD Type: ConstantValueType
 */
class ConstantValueType extends Type
{

    /**
     * @var string
     */
    protected $value = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ConstantValueType
     */
    public function setValue($value)
    {
        $this->value = $this->castValueIfNeeded("value", $value);
        return $this;
    }
}
