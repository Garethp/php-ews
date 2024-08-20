<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FreeBusyViewType
 *
 *
 * XSD Type: FreeBusyView
 *
 * @method FreeBusyViewType addFreeBusyViewType(string $freeBusyViewType)
 * @method FreeBusyViewType setFreeBusyViewType(array $freeBusyViewType)
 * @method FreeBusyViewType setMergedFreeBusy(string $mergedFreeBusy)
 * @method FreeBusyViewType addCalendarEventArray(CalendarEventType $calendarEventArray)
 * @method FreeBusyViewType setCalendarEventArray(array $calendarEventArray)
 * @method FreeBusyViewType setWorkingHours(WorkingHoursType $workingHours)
 */
class FreeBusyViewType extends Type
{

    /**
     * @var string[]
     */
    protected $freeBusyViewType = null;

    /**
     * @var string
     */
    protected $mergedFreeBusy = null;

    /**
     * @var \garethp\ews\API\Type\CalendarEventType[]
     */
    protected $calendarEventArray = null;

    /**
     * @var \garethp\ews\API\Type\WorkingHoursType
     */
    protected $workingHours = null;

    /**
     * @return string[]
     */
    public function getFreeBusyViewType()
    {
        return $this->freeBusyViewType;
    }

    /**
     * @return string
     */
    public function getMergedFreeBusy()
    {
        return $this->mergedFreeBusy;
    }

    /**
     * @return CalendarEventType[]
     */
    public function getCalendarEventArray()
    {
        return $this->calendarEventArray;
    }

    /**
     * @return WorkingHoursType
     */
    public function getWorkingHours()
    {
        return $this->workingHours;
    }
}
