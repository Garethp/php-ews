<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing CalendarEventType
 *
 *
 * XSD Type: CalendarEvent
 */
class CalendarEventType extends Type
{

    /**
     * @var \DateTime
     */
    protected $startTime = null;

    protected $_typeMap = array(
        'startTime' => 'dateTime',
        'endTime' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $endTime = null;

    /**
     * @var string
     */
    protected $busyType = null;

    /**
     * @var \garethp\ews\API\Type\CalendarEventDetailsType
     */
    protected $calendarEventDetails = null;

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @return string
     */
    public function getBusyType()
    {
        return $this->busyType;
    }

    /**
     * @return CalendarEventDetailsType
     */
    public function getCalendarEventDetails()
    {
        return $this->calendarEventDetails;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return CalendarEventType
     */
    public function setStartTime(\DateTime|string $value)
    {
        $this->startTime = $this->castValueIfNeeded("startTime", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return CalendarEventType
     */
    public function setEndTime(\DateTime|string $value)
    {
        $this->endTime = $this->castValueIfNeeded("endTime", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return CalendarEventType
     */
    public function setBusyType($value)
    {
        $this->busyType = $this->castValueIfNeeded("busyType", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value CalendarEventDetailsType
     * @return CalendarEventType
     */
    public function setCalendarEventDetails(CalendarEventDetailsType $value)
    {
        $this->calendarEventDetails = $this->castValueIfNeeded("calendarEventDetails", $value);
        return $this;
    }
}
