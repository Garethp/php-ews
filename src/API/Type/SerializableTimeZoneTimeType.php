<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SerializableTimeZoneTimeType
 *
 *
 * XSD Type: SerializableTimeZoneTime
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
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getBias()
    {
        return $this->bias;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return SerializableTimeZoneTimeType
     */
    public function setBias($value)
    {
        $this->bias = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return SerializableTimeZoneTimeType
     */
    public function setTime($value)
    {
        $this->time = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getDayOrder()
    {
        return $this->dayOrder;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return SerializableTimeZoneTimeType
     */
    public function setDayOrder($value)
    {
        $this->dayOrder = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return SerializableTimeZoneTimeType
     */
    public function setMonth($value)
    {
        $this->month = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return SerializableTimeZoneTimeType
     */
    public function setDayOfWeek($value)
    {
        $this->dayOfWeek = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return SerializableTimeZoneTimeType
     */
    public function setYear($value)
    {
        $this->year = $value;
        return $this;
    }
}
