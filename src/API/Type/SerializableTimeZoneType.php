<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SerializableTimeZoneType
 *
 *
 * XSD Type: SerializableTimeZone
 *
 * @method SerializableTimeZoneType setBias(integer $bias)
 * @method SerializableTimeZoneType setStandardTime(SerializableTimeZoneTimeType $standardTime)
 * @method SerializableTimeZoneType setDaylightTime(SerializableTimeZoneTimeType $daylightTime)
 */
class SerializableTimeZoneType extends Type
{

    /**
     * @var integer
     */
    protected $bias = null;

    /**
     * @var \garethp\ews\API\Type\SerializableTimeZoneTimeType
     */
    protected $standardTime = null;

    /**
     * @var \garethp\ews\API\Type\SerializableTimeZoneTimeType
     */
    protected $daylightTime = null;

    /**
     * @return integer
     */
    public function getBias()
    {
        return $this->bias;
    }

    /**
     * @return SerializableTimeZoneTimeType
     */
    public function getStandardTime()
    {
        return $this->standardTime;
    }

    /**
     * @return SerializableTimeZoneTimeType
     */
    public function getDaylightTime()
    {
        return $this->daylightTime;
    }
}
