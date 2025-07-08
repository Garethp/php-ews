<?php
/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 27-8-15
 * Time: 10:27
 */

namespace garethp\ews\API;

use garethp\ews\Caster;

trait MagicMethodsTrait
{
    public function __set($name, $value)
    {
        if (is_object($value) && !($value instanceof Type) && property_exists($value, "Entry")) {
            $value = $value->Entry;
        }

        if ($this->methodExists("set" . ucfirst($name))) {
            $convertedValue = $this->convertValueToExpectedType($value, $name);
            $this->{"set" . ucfirst($name)}($convertedValue);
            return;
        }

        if (!$this->exists($name) && $this->exists(lcfirst($name))) {
            $name = lcfirst($name);
        }

        $this->$name = $value;
    }

    public function exists($name)
    {
        return property_exists($this, $name);
    }

    public function methodExists($name)
    {
        return method_exists($this, $name);
    }

    /**
     * Automatically convert stdClass objects to proper EWS types
     *
     * @param mixed $value The value to convert
     * @param string $propertyName The property name
     * @return mixed Converted value
     */
    private function convertValueToExpectedType($value, string $propertyName)
    {
        if (!TypeConverter::containsStdClass($value)) {
            return $value;
        }
        
        $expectedType = $this->getExpectedTypeFromSetter($propertyName);
        
        if ($expectedType) {
            return TypeConverter::convertToType($value, $expectedType);
        }
        
        return $value;
    }

    /**
     * Get expected type from setter method using reflection
     *
     * @param string $propertyName Property name
     * @return string|null Expected type class name
     */
    private function getExpectedTypeFromSetter(string $propertyName): ?string
    {
        $methodName = "set" . ucfirst($propertyName);

        if (!method_exists($this, $methodName)) {
            return null;
        }

        $reflection = new \ReflectionMethod($this, $methodName);
        $parameters = $reflection->getParameters();
        
        if (empty($parameters)) {
            return null;
        }

        $type = $parameters[0]->getType();

        // Handle union types (e.g., array|InternetHeaderType)
        if ($type instanceof \ReflectionUnionType) {
            foreach ($type->getTypes() as $unionType) {
                if (!$unionType->isBuiltin() && $unionType->getName() !== 'array') {
                    return $unionType->getName();
                }
            }
        }

        // Handle single types
        if ($type && !$type->isBuiltin()) {
            return $type->getName();
        }

        return null;
    }
}
