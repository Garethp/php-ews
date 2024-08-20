<?php

namespace garethp\ews\API\Type;

/**
 * Class representing CalendarItemType
 *
 *
 * XSD Type: CalendarItemType
 *
 * @method CalendarItemType setUID(string $uID)
 * @method CalendarItemType setRecurrenceId(\DateTime $recurrenceId)
 * @method CalendarItemType setDateTimeStamp(\DateTime $dateTimeStamp)
 * @method CalendarItemType setStart(\DateTime $start)
 * @method CalendarItemType setEnd(\DateTime $end)
 * @method CalendarItemType setOriginalStart(\DateTime $originalStart)
 * @method CalendarItemType setIsAllDayEvent(boolean $isAllDayEvent)
 * @method CalendarItemType setLegacyFreeBusyStatus(string $legacyFreeBusyStatus)
 * @method CalendarItemType setLocation(string $location)
 * @method CalendarItemType setWhen(string $when)
 * @method CalendarItemType setIsMeeting(boolean $isMeeting)
 * @method CalendarItemType setIsCancelled(boolean $isCancelled)
 * @method CalendarItemType setIsRecurring(boolean $isRecurring)
 * @method CalendarItemType setMeetingRequestWasSent(boolean $meetingRequestWasSent)
 * @method CalendarItemType setIsResponseRequested(boolean $isResponseRequested)
 * @method CalendarItemType setCalendarItemType(string $calendarItemType)
 * @method CalendarItemType setMyResponseType(string $myResponseType)
 * @method CalendarItemType setOrganizer(SingleRecipientType $organizer)
 * @method CalendarItemType addRequiredAttendees(AttendeeType $requiredAttendees)
 * @method CalendarItemType setRequiredAttendees(array $requiredAttendees)
 * @method CalendarItemType addOptionalAttendees(AttendeeType $optionalAttendees)
 * @method CalendarItemType setOptionalAttendees(array $optionalAttendees)
 * @method CalendarItemType addResources(AttendeeType $resources)
 * @method CalendarItemType setResources(array $resources)
 * @method CalendarItemType setConflictingMeetingCount(integer $conflictingMeetingCount)
 * @method CalendarItemType setAdjacentMeetingCount(integer $adjacentMeetingCount)
 * @method CalendarItemType setConflictingMeetings(NonEmptyArrayOfAllItemsType $conflictingMeetings)
 * @method CalendarItemType setAdjacentMeetings(NonEmptyArrayOfAllItemsType $adjacentMeetings)
 * @method CalendarItemType setDuration(string $duration)
 * @method CalendarItemType setTimeZone(string $timeZone)
 * @method CalendarItemType setAppointmentReplyTime(\DateTime $appointmentReplyTime)
 * @method CalendarItemType setAppointmentSequenceNumber(integer $appointmentSequenceNumber)
 * @method CalendarItemType setAppointmentState(integer $appointmentState)
 * @method CalendarItemType setRecurrence(RecurrenceType $recurrence)
 * @method CalendarItemType setFirstOccurrence(OccurrenceInfoType $firstOccurrence)
 * @method CalendarItemType setLastOccurrence(OccurrenceInfoType $lastOccurrence)
 * @method CalendarItemType addModifiedOccurrences(OccurrenceInfoType $modifiedOccurrences)
 * @method CalendarItemType setModifiedOccurrences(array $modifiedOccurrences)
 * @method CalendarItemType addDeletedOccurrences(DeletedOccurrenceInfoType $deletedOccurrences)
 * @method CalendarItemType setDeletedOccurrences(array $deletedOccurrences)
 * @method CalendarItemType setMeetingTimeZone(TimeZoneType $meetingTimeZone)
 * @method CalendarItemType setStartTimeZone(TimeZoneDefinitionType $startTimeZone)
 * @method CalendarItemType setEndTimeZone(TimeZoneDefinitionType $endTimeZone)
 * @method CalendarItemType setConferenceType(integer $conferenceType)
 * @method CalendarItemType setAllowNewTimeProposal(boolean $allowNewTimeProposal)
 * @method CalendarItemType setIsOnlineMeeting(boolean $isOnlineMeeting)
 * @method CalendarItemType setMeetingWorkspaceUrl(string $meetingWorkspaceUrl)
 * @method CalendarItemType setNetShowUrl(string $netShowUrl)
 */
class CalendarItemType extends ItemType
{

    /**
     * @var string
     */
    protected $uID = null;

    /**
     * @var \DateTime
     */
    protected $recurrenceId = null;

    protected $_typeMap = array(
        'recurrenceId' => 'dateTime',
        'dateTimeStamp' => 'dateTime',
        'start' => 'dateTime',
        'end' => 'dateTime',
        'originalStart' => 'dateTime',
        'appointmentReplyTime' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $dateTimeStamp = null;

    /**
     * @var \DateTime
     */
    protected $start = null;

    /**
     * @var \DateTime
     */
    protected $end = null;

    /**
     * @var \DateTime
     */
    protected $originalStart = null;

    /**
     * @var boolean
     */
    protected $isAllDayEvent = null;

    /**
     * @var string
     */
    protected $legacyFreeBusyStatus = null;

    /**
     * @var string
     */
    protected $location = null;

    /**
     * @var string
     */
    protected $when = null;

    /**
     * @var boolean
     */
    protected $isMeeting = null;

    /**
     * @var boolean
     */
    protected $isCancelled = null;

    /**
     * @var boolean
     */
    protected $isRecurring = null;

    /**
     * @var boolean
     */
    protected $meetingRequestWasSent = null;

    /**
     * @var boolean
     */
    protected $isResponseRequested = null;

    /**
     * @var string
     */
    protected $calendarItemType = null;

    /**
     * @var string
     */
    protected $myResponseType = null;

    /**
     * @var \garethp\ews\API\Type\SingleRecipientType
     */
    protected $organizer = null;

    /**
     * @var \garethp\ews\API\Type\AttendeeType[]
     */
    protected $requiredAttendees = null;

    /**
     * @var \garethp\ews\API\Type\AttendeeType[]
     */
    protected $optionalAttendees = null;

    /**
     * @var \garethp\ews\API\Type\AttendeeType[]
     */
    protected $resources = null;

    /**
     * @var integer
     */
    protected $conflictingMeetingCount = null;

    /**
     * @var integer
     */
    protected $adjacentMeetingCount = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfAllItemsType
     */
    protected $conflictingMeetings = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfAllItemsType
     */
    protected $adjacentMeetings = null;

    /**
     * @var string
     */
    protected $duration = null;

    /**
     * @var string
     */
    protected $timeZone = null;

    /**
     * @var \DateTime
     */
    protected $appointmentReplyTime = null;

    /**
     * @var integer
     */
    protected $appointmentSequenceNumber = null;

    /**
     * @var integer
     */
    protected $appointmentState = null;

    /**
     * @var \garethp\ews\API\Type\RecurrenceType
     */
    protected $recurrence = null;

    /**
     * @var \garethp\ews\API\Type\OccurrenceInfoType
     */
    protected $firstOccurrence = null;

    /**
     * @var \garethp\ews\API\Type\OccurrenceInfoType
     */
    protected $lastOccurrence = null;

    /**
     * @var \garethp\ews\API\Type\OccurrenceInfoType[]
     */
    protected $modifiedOccurrences = null;

    /**
     * @var \garethp\ews\API\Type\DeletedOccurrenceInfoType[]
     */
    protected $deletedOccurrences = null;

    /**
     * @var \garethp\ews\API\Type\TimeZoneType
     */
    protected $meetingTimeZone = null;

    /**
     * @var \garethp\ews\API\Type\TimeZoneDefinitionType
     */
    protected $startTimeZone = null;

    /**
     * @var \garethp\ews\API\Type\TimeZoneDefinitionType
     */
    protected $endTimeZone = null;

    /**
     * @var integer
     */
    protected $conferenceType = null;

    /**
     * @var boolean
     */
    protected $allowNewTimeProposal = null;

    /**
     * @var boolean
     */
    protected $isOnlineMeeting = null;

    /**
     * @var string
     */
    protected $meetingWorkspaceUrl = null;

    /**
     * @var string
     */
    protected $netShowUrl = null;

    /**
     * @return string
     */
    public function getUID()
    {
        return $this->uID;
    }

    /**
     * @return \DateTime
     */
    public function getRecurrenceId()
    {
        return $this->recurrenceId;
    }

    /**
     * @return \DateTime
     */
    public function getDateTimeStamp()
    {
        return $this->dateTimeStamp;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @return \DateTime
     */
    public function getOriginalStart()
    {
        return $this->originalStart;
    }

    /**
     * @returns bool
     */
    public function isAllDayEvent()
    {
        return ((bool) $this->isAllDayEvent);
    }

    /**
     * @return boolean
     */
    public function getIsAllDayEvent()
    {
        return $this->isAllDayEvent;
    }

    /**
     * @return string
     */
    public function getLegacyFreeBusyStatus()
    {
        return $this->legacyFreeBusyStatus;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getWhen()
    {
        return $this->when;
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
    public function isCancelled()
    {
        return ((bool) $this->isCancelled);
    }

    /**
     * @return boolean
     */
    public function getIsCancelled()
    {
        return $this->isCancelled;
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
    public function isMeetingRequestWasSent()
    {
        return ((bool) $this->meetingRequestWasSent);
    }

    /**
     * @return boolean
     */
    public function getMeetingRequestWasSent()
    {
        return $this->meetingRequestWasSent;
    }

    /**
     * @returns bool
     */
    public function isResponseRequested()
    {
        return ((bool) $this->isResponseRequested);
    }

    /**
     * @return boolean
     */
    public function getIsResponseRequested()
    {
        return $this->isResponseRequested;
    }

    /**
     * @return string
     */
    public function getCalendarItemType()
    {
        return $this->calendarItemType;
    }

    /**
     * @return string
     */
    public function getMyResponseType()
    {
        return $this->myResponseType;
    }

    /**
     * @return SingleRecipientType
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @return AttendeeType[]
     */
    public function getRequiredAttendees()
    {
        return $this->requiredAttendees;
    }

    /**
     * @return AttendeeType[]
     */
    public function getOptionalAttendees()
    {
        return $this->optionalAttendees;
    }

    /**
     * @return AttendeeType[]
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @return integer
     */
    public function getConflictingMeetingCount()
    {
        return $this->conflictingMeetingCount;
    }

    /**
     * @return integer
     */
    public function getAdjacentMeetingCount()
    {
        return $this->adjacentMeetingCount;
    }

    /**
     * @return NonEmptyArrayOfAllItemsType
     */
    public function getConflictingMeetings()
    {
        return $this->conflictingMeetings;
    }

    /**
     * @return NonEmptyArrayOfAllItemsType
     */
    public function getAdjacentMeetings()
    {
        return $this->adjacentMeetings;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @return \DateTime
     */
    public function getAppointmentReplyTime()
    {
        return $this->appointmentReplyTime;
    }

    /**
     * @return integer
     */
    public function getAppointmentSequenceNumber()
    {
        return $this->appointmentSequenceNumber;
    }

    /**
     * @return integer
     */
    public function getAppointmentState()
    {
        return $this->appointmentState;
    }

    /**
     * @return RecurrenceType
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }

    /**
     * @return OccurrenceInfoType
     */
    public function getFirstOccurrence()
    {
        return $this->firstOccurrence;
    }

    /**
     * @return OccurrenceInfoType
     */
    public function getLastOccurrence()
    {
        return $this->lastOccurrence;
    }

    /**
     * @return OccurrenceInfoType[]
     */
    public function getModifiedOccurrences()
    {
        return $this->modifiedOccurrences;
    }

    /**
     * @return DeletedOccurrenceInfoType[]
     */
    public function getDeletedOccurrences()
    {
        return $this->deletedOccurrences;
    }

    /**
     * @return TimeZoneType
     */
    public function getMeetingTimeZone()
    {
        return $this->meetingTimeZone;
    }

    /**
     * @return TimeZoneDefinitionType
     */
    public function getStartTimeZone()
    {
        return $this->startTimeZone;
    }

    /**
     * @return TimeZoneDefinitionType
     */
    public function getEndTimeZone()
    {
        return $this->endTimeZone;
    }

    /**
     * @return integer
     */
    public function getConferenceType()
    {
        return $this->conferenceType;
    }

    /**
     * @returns bool
     */
    public function isAllowNewTimeProposal()
    {
        return ((bool) $this->allowNewTimeProposal);
    }

    /**
     * @return boolean
     */
    public function getAllowNewTimeProposal()
    {
        return $this->allowNewTimeProposal;
    }

    /**
     * @returns bool
     */
    public function isOnlineMeeting()
    {
        return ((bool) $this->isOnlineMeeting);
    }

    /**
     * @return boolean
     */
    public function getIsOnlineMeeting()
    {
        return $this->isOnlineMeeting;
    }

    /**
     * @return string
     */
    public function getMeetingWorkspaceUrl()
    {
        return $this->meetingWorkspaceUrl;
    }

    /**
     * @return string
     */
    public function getNetShowUrl()
    {
        return $this->netShowUrl;
    }
}
