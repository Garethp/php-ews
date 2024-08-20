<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ConstantValueType
 *
 *
 * XSD Type: ConstantValueType
 *
 * @method ConstantValueType setValue(string $value)
 */
class ConstantValueType extends Type
{

    /**
     * @var string
     */
    protected $value = null;

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
