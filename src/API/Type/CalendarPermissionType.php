<?php

namespace garethp\ews\API\Type;

/**
 * Class representing CalendarPermissionType
 *
 *
 * XSD Type: CalendarPermissionType
 *
 * @method CalendarPermissionType setReadItems(string $readItems)
 * @method CalendarPermissionType setCalendarPermissionLevel(string $calendarPermissionLevel)
 */
class CalendarPermissionType extends BasePermissionType
{

    /**
     * @var string
     */
    protected $readItems = null;

    /**
     * @var string
     */
    protected $calendarPermissionLevel = null;

    /**
     * @return string
     */
    public function getReadItems()
    {
        return $this->readItems;
    }

    /**
     * @return string
     */
    public function getCalendarPermissionLevel()
    {
        return $this->calendarPermissionLevel;
    }
}
