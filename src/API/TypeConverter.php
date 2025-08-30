<?php

namespace garethp\ews\API;

/**
 * Type converter for handling SOAP stdClass objects
 * Converts stdClass objects to proper EWS type objects
 */
class TypeConverter
{
    /**
     * Convert stdClass objects to proper EWS type objects
     *
     * @param object $object The object containing the property
     * @param mixed $value The value to convert
     * @param string $propertyName The property name
     * @return mixed Converted value
     */
    public static function convertValueToExpectedType($object, $value, string $propertyName)
    {
        if (!($value instanceof \stdClass || (is_array($value) && current($value) instanceof \stdClass))) {
            return $value;
        }

        $type = self::getSetterType($object, $propertyName);
        return $type ? self::convertToType($value, $type) : $value;
    }

    /**
     * Convert stdClass objects to proper EWS types using reflection
     *
     * @param mixed $value The value to convert
     * @param string $targetType The expected EWS type class name
     * @return mixed Converted value or original if no conversion needed
     */
    public static function convertToType($value, string $type)
    {
        if (!class_exists($type)) {
            return $value;
        }

        if (is_array($value)) {
            return array_map(fn($v) => self::convertToType($v, $type), $value);
        }

        if (!($value instanceof \stdClass)) {
            return $value;
        }

        // We'll sometimes get objects where they only hold a single key that, rather than matching the type that it
        // goes into it'll be containing the items that the type expects.
        $valueProperties = get_object_vars($value);
        if (count($valueProperties) === 1 && !property_exists($type, lcfirst(key($valueProperties)))) {
            return self::convertToType($value->{key($valueProperties)}, $type);
        }

        $object = new $type();
        foreach ($valueProperties as $prop => $val) {
            self::setProperty($object, $prop, $val);
        }

        return $object;
    }

    /**
     * Get the setter method type for a property
     *
     * @param object $object The object to inspect
     * @param string $property The property name
     * @return string|null The expected type or null if no setter exists
     */
    private static function getSetterType($object, string $property): ?string
    {
        $method = 'set' . ucfirst($property);
        if (!method_exists($object, $method)) {
            return null;
        }

        $type = (new \ReflectionMethod($object, $method))
            ->getParameters()[0]?->getType();

        if ($type instanceof \ReflectionUnionType) {
            foreach ($type->getTypes() as $t) {
                if (!$t->isBuiltin() && $t->getName() !== 'array') {
                    return $t->getName();
                }
            }
        }

        return ($type instanceof \ReflectionNamedType && !$type->isBuiltin())
            ? $type->getName()
            : null;
    }

    /**
     * Set property on target object using setter method or direct assignment
     *
     * @param object $instance Target object
     * @param string $property Property name
     * @param mixed $value Property value
     */
    private static function setProperty(object $instance, string $property, $value): void
    {
        $setter = 'set' . ucfirst($property);
        if (!method_exists($instance, $setter)) {
            if (property_exists($instance, $property)) {
                $instance->$property = $value;
            }
            return;
        }

        $type = (new \ReflectionMethod($instance, $setter))->getParameters()[0]?->getType();
        $value = self::convertIfStdClass($value, $type);
        $instance->$setter($value);
    }

    private static function convertIfStdClass($value, ?\ReflectionType $type)
    {
        if (!($value instanceof \stdClass) || !$type) {
            return $value;
        }

        if ($type instanceof \ReflectionUnionType) {
            foreach ($type->getTypes() as $t) {
                $name = $t->getName();
                if (!$t->isBuiltin() && class_exists($name)) {
                    return self::convertToType($value, $name);
                }
                if ($name === 'array') {
                    $props = get_object_vars($value);
                    $arr = count($props) === 1 ? current($props) : (array)$value;
                    return is_array($arr) ? $arr : [$arr];
                }
            }
        }

        if ($type instanceof \ReflectionNamedType && !$type->isBuiltin()) {
            return self::convertToType($value, $type->getName());
        }

        return $value;
    }
}
