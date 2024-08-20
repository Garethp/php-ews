<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TimeZoneType
 *
 *
 * XSD Type: TimeZoneType
 *
 * @method TimeZoneType setTimeZoneName(string $timeZoneName)
 * @method TimeZoneType setBaseOffset(\DateInterval $baseOffset)
 * @method TimeZoneType setStandard(TimeChangeType $standard)
 * @method TimeZoneType setDaylight(TimeChangeType $daylight)
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
}
