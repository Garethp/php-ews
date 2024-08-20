<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing CalendarPermissionSetType
 *
 * The set of permissions on a folder
 * XSD Type: CalendarPermissionSetType
 *
 * @method CalendarPermissionSetType addCalendarPermissions(CalendarPermissionType $calendarPermissions)
 * @method CalendarPermissionSetType setCalendarPermissions(array $calendarPermissions)
 * @method CalendarPermissionSetType addUnknownEntries(string $unknownEntries)
 * @method CalendarPermissionSetType setUnknownEntries(array $unknownEntries)
 */
class CalendarPermissionSetType extends Type
{

    /**
     * @var \garethp\ews\API\Type\CalendarPermissionType[]
     */
    protected $calendarPermissions = null;

    /**
     * @var string[]
     */
    protected $unknownEntries = null;

    /**
     * @return CalendarPermissionType[]
     */
    public function getCalendarPermissions()
    {
        return $this->calendarPermissions;
    }

    /**
     * @return string[]
     */
    public function getUnknownEntries()
    {
        return $this->unknownEntries;
    }
}
