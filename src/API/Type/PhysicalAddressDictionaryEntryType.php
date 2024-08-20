<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing PhysicalAddressDictionaryEntryType
 *
 *
 * XSD Type: PhysicalAddressDictionaryEntryType
 *
 * @method PhysicalAddressDictionaryEntryType setKey(string $key)
 * @method PhysicalAddressDictionaryEntryType setStreet(string $street)
 * @method PhysicalAddressDictionaryEntryType setCity(string $city)
 * @method PhysicalAddressDictionaryEntryType setState(string $state)
 * @method PhysicalAddressDictionaryEntryType setCountryOrRegion(string $countryOrRegion)
 * @method PhysicalAddressDictionaryEntryType setPostalCode(string $postalCode)
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
}
