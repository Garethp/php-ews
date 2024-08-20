<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SerializableTimeZoneTimeType
 *
 *
 * XSD Type: SerializableTimeZoneTime
 *
 * @method SerializableTimeZoneTimeType setBias(integer $bias)
 * @method SerializableTimeZoneTimeType setTime(string $time)
 * @method SerializableTimeZoneTimeType setDayOrder(integer $dayOrder)
 * @method SerializableTimeZoneTimeType setMonth(integer $month)
 * @method SerializableTimeZoneTimeType setDayOfWeek(string $dayOfWeek)
 * @method SerializableTimeZoneTimeType setYear(string $year)
 */
class SerializableTimeZoneTimeType extends Type
{

    /**
     * @var integer
     */
    protected $bias = null;

    /**
     * @var string
     */
    protected $time = null;

    /**
     * @var integer
     */
    protected $dayOrder = null;

    /**
     * @var integer
     */
    protected $month = null;

    /**
     * @var string
     */
    protected $dayOfWeek = null;

    /**
     * @var string
     */
    protected $year = null;

    /**
     * @return integer
     */
    public function getBias()
    {
        return $this->bias;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return integer
     */
    public function getDayOrder()
    {
        return $this->dayOrder;
    }

    /**
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }
}
