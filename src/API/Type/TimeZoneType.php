<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TimeZoneType
 *
 *
 * XSD Type: TimeZoneType
 */
class TimeZoneType extends Type
{

    /**
     * @var string
     */
    protected $timeZoneName = null;

    /**
     * @var \DateInterval
     */
    protected $baseOffset = null;

    /**
     * @var \garethp\ews\API\Type\TimeChangeType
     */
    protected $standard = null;

    /**
     * @var \garethp\ews\API\Type\TimeChangeType
     */
    protected $daylight = null;

    /**
     * @return string
     */
    public function getTimeZoneName()
    {
        return $this->timeZoneName;
    }

    /**
     * @return \DateInterval
     */
    public function getBaseOffset()
    {
        return $this->baseOffset;
    }

    /**
     * @return TimeChangeType
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * @return TimeChangeType
     */
    public function getDaylight()
    {
        return $this->daylight;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TimeZoneType
     */
    public function setTimeZoneName($value)
    {
        $this->timeZoneName = $this->castValueIfNeeded("timeZoneName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateInterval
     * @return TimeZoneType
     */
    public function setBaseOffset(\DateInterval $value)
    {
        $this->baseOffset = $this->castValueIfNeeded("baseOffset", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TimeChangeType
     * @return TimeZoneType
     */
    public function setStandard(TimeChangeType $value)
    {
        $this->standard = $this->castValueIfNeeded("standard", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TimeChangeType
     * @return TimeZoneType
     */
    public function setDaylight(TimeChangeType $value)
    {
        $this->daylight = $this->castValueIfNeeded("daylight", $value);
        return $this;
    }
}
