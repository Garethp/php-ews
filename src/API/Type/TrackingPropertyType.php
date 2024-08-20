<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TrackingPropertyType
 *
 *
 * XSD Type: TrackingPropertyType
 *
 * @method TrackingPropertyType setName(string $name)
 * @method TrackingPropertyType setValue(string $value)
 */
class TrackingPropertyType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $value = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
