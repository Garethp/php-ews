<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing CalendarEventDetailsType
 *
 *
 * XSD Type: CalendarEventDetails
 *
 * @method CalendarEventDetailsType setID(string $iD)
 * @method CalendarEventDetailsType setSubject(string $subject)
 * @method CalendarEventDetailsType setLocation(string $location)
 * @method CalendarEventDetailsType setIsMeeting(boolean $isMeeting)
 * @method CalendarEventDetailsType setIsRecurring(boolean $isRecurring)
 * @method CalendarEventDetailsType setIsException(boolean $isException)
 * @method CalendarEventDetailsType setIsReminderSet(boolean $isReminderSet)
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
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @returns bool
     */
    public function isMeeting()
    {
        return ((bool) $this->isMeeting);
    }

    /**
     * @return boolean
     */
    public function getIsMeeting()
    {
        return $this->isMeeting;
    }

    /**
     * @returns bool
     */
    public function isRecurring()
    {
        return ((bool) $this->isRecurring);
    }

    /**
     * @return boolean
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
    }

    /**
     * @returns bool
     */
    public function isException()
    {
        return ((bool) $this->isException);
    }

    /**
     * @return boolean
     */
    public function getIsException()
    {
        return $this->isException;
    }

    /**
     * @returns bool
     */
    public function isReminderSet()
    {
        return ((bool) $this->isReminderSet);
    }

    /**
     * @return boolean
     */
    public function getIsReminderSet()
    {
        return $this->isReminderSet;
    }

    /**
     * @returns bool
     */
    public function isPrivate()
    {
        return ((bool) $this->isPrivate);
    }

    /**
     * @return boolean
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }
}
