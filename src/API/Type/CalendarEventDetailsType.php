<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing CalendarEventDetailsType
 *
 *
 * XSD Type: CalendarEventDetails
 *
 * @method string getID()
 * @method CalendarEventDetailsType setID(string $iD)
 * @method string getSubject()
 * @method CalendarEventDetailsType setSubject(string $subject)
 * @method string getLocation()
 * @method CalendarEventDetailsType setLocation(string $location)
 * @method boolean getIsMeeting()
 * @method CalendarEventDetailsType setIsMeeting(boolean $isMeeting)
 * @method boolean getIsRecurring()
 * @method CalendarEventDetailsType setIsRecurring(boolean $isRecurring)
 * @method boolean getIsException()
 * @method CalendarEventDetailsType setIsException(boolean $isException)
 * @method boolean getIsReminderSet()
 * @method CalendarEventDetailsType setIsReminderSet(boolean $isReminderSet)
 * @method boolean getIsPrivate()
 * @method CalendarEventDetailsType setIsPrivate(boolean $isPrivate)
 */
class CalendarEventDetailsType extends Type
{

    /**
     * @var string
     */
    protected $iD = null;

    /**
     * @var string
     */
    protected $subject = null;

    /**
     * @var string
     */
    protected $location = null;

    /**
     * @var boolean
     */
    protected $isMeeting = null;

    /**
     * @var boolean
     */
    protected $isRecurring = null;

    /**
     * @var boolean
     */
    protected $isException = null;

    /**
     * @var boolean
     */
    protected $isReminderSet = null;

    /**
     * @var boolean
     */
    protected $isPrivate = null;

    /**
     * @returns bool
     */
    public function isMeeting()
    {
        return $this->isMeeting && $this->isMeeting;
    }

    /**
     * @returns bool
     */
    public function isRecurring()
    {
        return $this->isRecurring && $this->isRecurring;
    }

    /**
     * @returns bool
     */
    public function isException()
    {
        return $this->isException && $this->isException;
    }

    /**
     * @returns bool
     */
    public function isReminderSet()
    {
        return $this->isReminderSet && $this->isReminderSet;
    }

    /**
     * @returns bool
     */
    public function isPrivate()
    {
        return $this->isPrivate && $this->isPrivate;
    }
}
