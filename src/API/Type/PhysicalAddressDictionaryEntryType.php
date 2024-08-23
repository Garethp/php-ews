<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing PhysicalAddressDictionaryEntryType
 *
 *
 * XSD Type: PhysicalAddressDictionaryEntryType
 */
class PhysicalAddressDictionaryEntryType extends Type
{

    /**
     * @var string
     */
    protected $key = null;

    /**
     * @var string
     */
    protected $street = null;

    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var string
     */
    protected $state = null;

    /**
     * @var string
     */
    protected $countryOrRegion = null;

    /**
     * @var string
     */
    protected $postalCode = null;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getCountryOrRegion()
    {
        return $this->countryOrRegion;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PhysicalAddressDictionaryEntryType
     */
    public function setKey($value)
    {
        $this->key = $this->castValueIfNeeded("key", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PhysicalAddressDictionaryEntryType
     */
    public function setStreet($value)
    {
        $this->street = $this->castValueIfNeeded("street", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PhysicalAddressDictionaryEntryType
     */
    public function setCity($value)
    {
        $this->city = $this->castValueIfNeeded("city", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PhysicalAddressDictionaryEntryType
     */
    public function setState($value)
    {
        $this->state = $this->castValueIfNeeded("state", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PhysicalAddressDictionaryEntryType
     */
    public function setCountryOrRegion($value)
    {
        $this->countryOrRegion = $this->castValueIfNeeded("countryOrRegion", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PhysicalAddressDictionaryEntryType
     */
    public function setPostalCode($value)
    {
        $this->postalCode = $this->castValueIfNeeded("postalCode", $value);
        return $this;
    }
}
