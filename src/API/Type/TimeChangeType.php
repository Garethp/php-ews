<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TimeChangeType
 *
 *
 * XSD Type: TimeChangeType
 */
class TimeChangeType extends Type
{

    /**
     * @var string
     */
    protected $timeZoneName = null;

    /**
     * @var \DateInterval
     */
    protected $offset = null;

    /**
     * @var \garethp\ews\API\Type\RelativeYearlyRecurrencePatternType
     */
    protected $relativeYearlyRecurrence = null;

    /**
     * @var \DateTime
     */
    protected $absoluteDate = null;

    protected $_typeMap = array(
        'absoluteDate' => 'date',
        'time' => 'time',
    );

    /**
     * @var \DateTime
     */
    protected $time = null;

    /**
     * @return string
     */
    public function getTimeZoneName()
    {
        return $this->timeZoneName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TimeChangeType
     */
    public function setTimeZoneName($value)
    {
        $this->timeZoneName = $this->castValueIfNeeded("timeZoneName", $value);
        return $this;
    }

    /**
     * @return \DateInterval
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateInterval
     * @return TimeChangeType
     */
    public function setOffset(\DateInterval $value)
    {
        $this->offset = $this->castValueIfNeeded("offset", $value);
        return $this;
    }

    /**
     * @return RelativeYearlyRecurrencePatternType
     */
    public function getRelativeYearlyRecurrence()
    {
        return $this->relativeYearlyRecurrence;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RelativeYearlyRecurrencePatternType
     * @return TimeChangeType
     */
    public function setRelativeYearlyRecurrence(RelativeYearlyRecurrencePatternType $value)
    {
        $this->relativeYearlyRecurrence = $this->castValueIfNeeded("relativeYearlyRecurrence", $value);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAbsoluteDate()
    {
        return $this->absoluteDate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return TimeChangeType
     */
    public function setAbsoluteDate(\DateTime|string $value)
    {
        $this->absoluteDate = $this->castValueIfNeeded("absoluteDate", $value);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return TimeChangeType
     */
    public function setTime(\DateTime|string $value)
    {
        $this->time = $this->castValueIfNeeded("time", $value);
        return $this;
    }
}
