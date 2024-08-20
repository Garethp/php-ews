<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ValueType
 *
 *
 * XSD Type: Value
 *
 * @method ValueType setName(string $name)
 */
class ValueType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
