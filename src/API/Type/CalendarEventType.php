<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing CalendarEventType
 *
 *
 * XSD Type: CalendarEvent
 *
 * @method CalendarEventType setStartTime(\DateTime $startTime)
 * @method CalendarEventType setEndTime(\DateTime $endTime)
 * @method CalendarEventType setBusyType(string $busyType)
 * @method CalendarEventType setCalendarEventDetails(CalendarEventDetailsType $calendarEventDetails)
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
}
