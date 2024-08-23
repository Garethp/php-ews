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
 * @method ExtendedPropertyType addValues(string $values)
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value PathToExtendedFieldType
     * @return ExtendedPropertyType
     */
    public function setExtendedFieldURI(PathToExtendedFieldType $value)
    {
        $this->extendedFieldURI = $this->castValueIfNeeded("extendedFieldURI", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ExtendedPropertyType
     */
    public function setValue($value)
    {
        $this->value = $this->castValueIfNeeded("value", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ExtendedPropertyType
     */
    public function setValues(array $value)
    {
        $this->values = $this->castValueIfNeeded("values", $value);
        return $this;
    }
}
