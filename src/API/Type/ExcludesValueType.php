<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ExcludesValueType
 *
 *
 * XSD Type: ExcludesValueType
 *
 * @method ExcludesValueType setValue(string $value)
 */
class ExcludesValueType extends Type
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
