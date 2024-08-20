<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ExtendedPropertyType
 *
 * Represents an extended property instance (both its path identifier along with its
 *  associated value).
 * XSD Type: ExtendedPropertyType
 *
 * @method ExtendedPropertyType setExtendedFieldURI(PathToExtendedFieldType $extendedFieldURI)
 * @method ExtendedPropertyType setValue(string $value)
 * @method ExtendedPropertyType addValues(string $values)
 * @method ExtendedPropertyType setValues(array $values)
 */
class ExtendedPropertyType extends Type
{

    /**
     * @var \garethp\ews\API\Type\PathToExtendedFieldType
     */
    protected $extendedFieldURI = null;

    /**
     * @var string
     */
    protected $value = null;

    /**
     * @var string[]
     */
    protected $values = null;

    /**
     * @return PathToExtendedFieldType
     */
    public function getExtendedFieldURI()
    {
        return $this->extendedFieldURI;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string[]
     */
    public function getValues()
    {
        return $this->values;
    }
}
