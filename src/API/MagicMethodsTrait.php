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
            $convertedValue = TypeConverter::convertValueToExpectedType($this, $value, $name);
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
}
