<?php

namespace garethp\ews;

use garethp\ews\API\Type;
use garethp\ews\API\XmlObject;

trait BuildableTrait
{
    /**
     * @var string
     */
    public $_ = '';

    public $_value = null;

    public function getNonNullItems($includeHiddenValue = false)
    {
        $items = get_object_vars($this);

        foreach ($items as $key => $item) {
            if (substr($key, 0, 1) == "_" || $item === null) {
                unset($items[$key]);
            }
        }

        if ($includeHiddenValue && $this->_value !== null) {
            $items['_value'] = $this->_value;
        }

        return $items;
    }

    /**
     * @param $array
     * @param bool $strict When set to true, we'll use reflection to build the objects
     *
     * @return static|XmlObject
     */
    public static function buildFromArray($array, bool $strict = false)
    {
        if (static::class === Type::class) {
            return XmlObject::buildFromArray($array, $strict);
        }

        if ($array instanceof XmlObject && $strict) {
            $array = (array)$array;
        }

        if (!is_array($array)) {
            return $array;
        }

        if (!self::arrayIsAssoc($array)) {
            return self::buildArrayFromArray($array, $strict);
        } else {
            return self::buildObjectFromArray($array, $strict);
        }
    }

    protected static function buildObjectFromArray($array, bool $strict = false)
    {
        $object = new static();
        $reflect = new \ReflectionClass(static::class);

        foreach ($array as $key => $value) {
            // If we're in strict mode, let's take the reflection class, check for a setter and try to use that to build
            // the array, resulting in type-correct responses the whole way down.
            if ($strict === true && $reflect->hasMethod("set" . ucfirst($key))) {
                $parameters = $reflect->getMethod("set" . ucfirst($key))->getParameters();

                if (count($parameters) === 1
                    && $parameters[0]->hasType()
                    && $parameters[0]->getClass() !== null) {
                    $classToBuild = $parameters[0]->getClass()->getName();

                    $newValue = call_user_func("$classToBuild::buildFromArray", $value, true);
                    $object->{ucfirst($key)} = $newValue;
                    continue;
                }
            }

            if (is_array($value)) {
                $value = self::buildFromArray($value);
            }

            //I think _value is a more expressive way to set string value, but Soap needs _
            if ($key === "_value") {
                $key = "_";
            }

            if ($value instanceof Type) {
                $value = $value->toXmlObject();
            }

            $object->{ucfirst($key)} = $value;
        }

        return $object;
    }

    public static function buildArrayFromArray($array)
    {
        foreach ($array as $key => $value) {
            $array[$key] = self::buildFromArray($value);
        }

        return $array;
    }

    public function toXmlObject()
    {
        $objectToReturn = new XmlObject();
        $objectToReturn->_ = (string)$this;

        $properties = $this->getNonNullItems(true);

        foreach ($properties as $name => $property) {
            //I think _value is a more expressive way to set string value, but Soap needs _
            if ($name == "_value") {
                $name = "_";
            }

            $name = ucfirst($name);
            $objectToReturn->$name = $this->propertyToXml($name, $property);
        }

        return $objectToReturn;
    }

    /**
     * @param $name
     * @param $property
     * @return array|Type|null
     */
    protected function propertyToXml($name, $property)
    {
        if ($property instanceof \DateTime) {
            $property = $property->format("c");
        }

        if ($property instanceof Type) {
            return $property->toXmlObject();
        }

        if (is_array($property) && $this->arrayIsAssoc($property)) {
            return $this->buildFromArray($property);
        }

        if (is_array($property)) {
            return array_map(function ($property) {
                if ($property instanceof Type) {
                    return $property->toXmlObject();
                }

                return $property;
            }, $property);
        }

        return $property;
    }

    public static function arrayIsAssoc($array)
    {
        return (bool)count(array_filter(array_keys($array), 'is_string'));
    }

    /**
     * Clones any object properties on a type object when it is cloned. Allows
     * for a deep clone required when using object to represent data types when
     * making a SOAP call.
     */
    public function __clone()
    {
        // Iterate over all properties on the current object.
        foreach (get_object_vars($this) as $property => $value) {
            $this->$property = \garethp\ews\Utilities\cloneValue($value);
        }
    }

    public function __toString()
    {
        if (!is_string($this->_)) {
            return '';
        }

        return $this->_;
    }
}
