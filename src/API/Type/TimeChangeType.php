<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TimeChangeType
 *
 *
 * XSD Type: TimeChangeType
 *
 * @method TimeChangeType setTimeZoneName(string $timeZoneName)
 * @method TimeChangeType setOffset(\DateInterval $offset)
 * @method TimeChangeType setRelativeYearlyRecurrence(RelativeYearlyRecurrencePatternType $relativeYearlyRecurrence)
 * @method TimeChangeType setAbsoluteDate(\DateTime $absoluteDate)
 * @method TimeChangeType setTime(\DateTime $time)
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
     * @return \DateInterval
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @return RelativeYearlyRecurrencePatternType
     */
    public function getRelativeYearlyRecurrence()
    {
        return $this->relativeYearlyRecurrence;
    }

    /**
     * @return \DateTime
     */
    public function getAbsoluteDate()
    {
        return $this->absoluteDate;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }
}
