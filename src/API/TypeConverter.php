<?php

namespace garethp\ews\API;

/**
 * Type converter for handling SOAP stdClass objects
 * Automatically converts stdClass objects to proper EWS type objects
 */
class TypeConverter
{
    /**
     * Convert stdClass objects to proper EWS types using reflection
     *
     * @param mixed $value The value to convert
     * @param string $targetType The expected EWS type class name
     * @return mixed Converted value or original if no conversion needed
     */
    public static function convertToType($value, string $targetType)
    {
        if (is_array($value)) {
            return array_map(function ($item) use ($targetType) {
                return self::convertSingleObject($item, $targetType);
            }, $value);
        }
        
        return self::convertSingleObject($value, $targetType);
    }
    
    /**
     * Convert a single stdClass object to target type
     *
     * @param mixed $value The value to convert
     * @param string $targetType The target EWS type class name
     * @return mixed Converted object or original value
     */
    private static function convertSingleObject($value, string $targetType)
    {
        if (!($value instanceof \stdClass)) {
            return $value;
        }
        
        if (!class_exists($targetType)) {
            return $value;
        }
        
        $instance = new $targetType();
        
        // Map stdClass properties to typed object
        foreach (get_object_vars($value) as $property => $propertyValue) {
            self::setProperty($instance, $property, $propertyValue);
        }
        
        return $instance;
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
        // Try setter method first
        $setterMethod = 'set' . ucfirst($property);
        if (method_exists($instance, $setterMethod)) {
            $instance->$setterMethod($value);
            return;
        }
        
        // Try direct property assignment
        if (property_exists($instance, $property)) {
            $instance->$property = $value;
        }
    }
    
    /**
     * Check if value contains any stdClass objects
     *
     * @param mixed $value Value to check
     * @return bool True if contains stdClass objects
     */
    public static function containsStdClass($value): bool
    {
        if ($value instanceof \stdClass) {
            return true;
        }
        
        if (is_array($value)) {
            foreach ($value as $item) {
                if ($item instanceof \stdClass) {
                    return true;
                }
            }
        }
        
        return false;
    }
}
