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
    protected $_typeMap = [];

    public function __call($name, $arguments)
    {
        $callTypeIndex = 3;
        if (substr($name, 0, 2) == "is") {
            $callTypeIndex = 2;
        }

        $callType = substr($name, 0, $callTypeIndex);
        $propertyName = substr($name, $callTypeIndex);

        if (in_array($callType, array('get', 'is')) && count($arguments) == 0) {
            return $this->{$callType}($propertyName);
        }

        if (in_array($callType, array('add', 'set')) && count($arguments) == 1) {
            return $this->{$callType}($propertyName, $arguments[0]);
        }

        throw new \Exception("The method you tried to call doesn't exist");
    }

    public function __set($name, $value)
    {
        if (is_object($value) && !($value instanceof Type) && property_exists($value, "Entry")) {
            $value = $value->Entry;
        }

        if ($this->methodExists("set" . ucfirst($name))) {
            $this->{"set" . ucfirst($name)}($this->castValueIfNeeded(lcfirst($name), $value));
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

    public function get($name)
    {
        $name = $this->getValidNameInCorrectCase([$name, "get$name"]);
        return $this->$name;
    }

    public function set($name, $value)
    {
        $name = $this->getNameInCorrectCase($name);
        $value = $this->castValueIfNeeded($name, $value);

        $this->$name = $value;

        return $this;
    }

    public function add($name, $value)
    {
        $name = $this->getNameInCorrectCase($name);
        $value = $this->castValueIfNeeded($name, $value);

        if ($this->$name == null) {
            $this->$name = array();
        }

        if (!is_array($this->$name)) {
            $this->$name = array($this->$name);
        }

        $this->{$name}[] = $value;

        return $this;
    }

    public function is($name)
    {
        $nameWithIs = "Is$name";
        $name = $this->getValidNameInCorrectCase([$nameWithIs, $name]);

        return ((bool) $this->$name);
    }

    public function cast($value, $type)
    {
        return Caster::cast($value, $type);
    }

    public function castToExchange($value, $type)
    {
        if (Caster::castExists($type, 'ExchangeFormat')) {
            $value = Caster::cast($value, 'ExchangeFormat');
        }

        return $value;
    }

    protected function getValidNameInCorrectCase($names)
    {
        foreach ($names as $name) {
            try {
                return $this->getNameInCorrectCase($name);
            } catch (\Exception $e) {
                //Nothing needed here. If everything errors out, we'll throw a new exception below
            }
        }

        throw new \Exception('Property ' . $names[0] . ' does not exist');
    }

    /**
     * @param $name
     * @return string
     * @throws \Exception
     */
    protected function getNameInCorrectCase($name)
    {
        if (!$this->exists($name) && $this->exists(lcfirst($name))) {
            $name = lcfirst($name);
        }

        if (!$this->exists($name)) {
            throw new \Exception('Property ' . $name . ' does not exist');
        }

        return $name;
    }

    /**
     * @param $name
     * @param $value
     * @return null
     */
    protected function castValueIfNeeded($name, $value)
    {
        if (isset($this->_typeMap[$name])) {
            $value = $this->cast($value, $this->_typeMap[$name]);

            return $value;
        }

        return $value;
    }
}
