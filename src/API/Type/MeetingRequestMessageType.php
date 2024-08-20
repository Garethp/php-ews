<?php

namespace garethp\ews\API\Type;

/**
 * Class representing MeetingRequestMessageType
 *
 *
 * XSD Type: MeetingRequestMessageType
 *
 * @method MeetingRequestMessageType setMeetingRequestType(string $meetingRequestType)
 * @method MeetingRequestMessageType setIntendedFreeBusyStatus(string $intendedFreeBusyStatus)
 * @method MeetingRequestMessageType setStart(\DateTime $start)
 * @method MeetingRequestMessageType setEnd(\DateTime $end)
 * @method MeetingRequestMessageType setOriginalStart(\DateTime $originalStart)
 * @method MeetingRequestMessageType setIsAllDayEvent(boolean $isAllDayEvent)
 * @method MeetingRequestMessageType setLegacyFreeBusyStatus(string $legacyFreeBusyStatus)
 * @method MeetingRequestMessageType setLocation(string $location)
 * @method MeetingRequestMessageType setWhen(string $when)
 * @method MeetingRequestMessageType setIsMeeting(boolean $isMeeting)
 * @method MeetingRequestMessageType setIsCancelled(boolean $isCancelled)
 * @method MeetingRequestMessageType setIsRecurring(boolean $isRecurring)
 * @method MeetingRequestMessageType setMeetingRequestWasSent(boolean $meetingRequestWasSent)
 * @method MeetingRequestMessageType setCalendarItemType(string $calendarItemType)
 * @method MeetingRequestMessageType setMyResponseType(string $myResponseType)
 * @method MeetingRequestMessageType setOrganizer(SingleRecipientType $organizer)
 * @method MeetingRequestMessageType addRequiredAttendees(AttendeeType $requiredAttendees)
 * @method MeetingRequestMessageType setRequiredAttendees(array $requiredAttendees)
 * @method MeetingRequestMessageType addOptionalAttendees(AttendeeType $optionalAttendees)
 * @method MeetingRequestMessageType setOptionalAttendees(array $optionalAttendees)
 * @method MeetingRequestMessageType addResources(AttendeeType $resources)
 * @method MeetingRequestMessageType setResources(array $resources)
 * @method MeetingRequestMessageType setConflictingMeetingCount(integer $conflictingMeetingCount)
 * @method MeetingRequestMessageType setAdjacentMeetingCount(integer $adjacentMeetingCount)
 * @method MeetingRequestMessageType setConflictingMeetings(NonEmptyArrayOfAllItemsType $conflictingMeetings)
 * @method MeetingRequestMessageType setAdjacentMeetings(NonEmptyArrayOfAllItemsType $adjacentMeetings)
 * @method MeetingRequestMessageType setDuration(string $duration)
 * @method MeetingRequestMessageType setTimeZone(string $timeZone)
 * @method MeetingRequestMessageType setAppointmentReplyTime(\DateTime $appointmentReplyTime)
 * @method MeetingRequestMessageType setAppointmentSequenceNumber(integer $appointmentSequenceNumber)
 * @method MeetingRequestMessageType setAppointmentState(integer $appointmentState)
 * @method MeetingRequestMessageType setRecurrence(RecurrenceType $recurrence)
 * @method MeetingRequestMessageType setFirstOccurrence(OccurrenceInfoType $firstOccurrence)
 * @method MeetingRequestMessageType setLastOccurrence(OccurrenceInfoType $lastOccurrence)
 * @method MeetingRequestMessageType addModifiedOccurrences(OccurrenceInfoType $modifiedOccurrences)
 * @method MeetingRequestMessageType setModifiedOccurrences(array $modifiedOccurrences)
 * @method MeetingRequestMessageType addDeletedOccurrences(DeletedOccurrenceInfoType $deletedOccurrences)
 * @method MeetingRequestMessageType setDeletedOccurrences(array $deletedOccurrences)
 * @method MeetingRequestMessageType setMeetingTimeZone(TimeZoneType $meetingTimeZone)
 * @method MeetingRequestMessageType setStartTimeZone(TimeZoneDefinitionType $startTimeZone)
 * @method MeetingRequestMessageType setEndTimeZone(TimeZoneDefinitionType $endTimeZone)
 * @method MeetingRequestMessageType setConferenceType(integer $conferenceType)
 * @method MeetingRequestMessageType setAllowNewTimeProposal(boolean $allowNewTimeProposal)
 * @method MeetingRequestMessageType setIsOnlineMeeting(boolean $isOnlineMeeting)
 * @method MeetingRequestMessageType setMeetingWorkspaceUrl(string $meetingWorkspaceUrl)
 * @method MeetingRequestMessageType setNetShowUrl(string $netShowUrl)
 */
class MeetingRequestMessageType extends MeetingMessageType
{

    /**
     * @var string
     */
    protected $meetingRequestType = null;

    /**
     * @var string
     */
    protected $intendedFreeBusyStatus = null;

    /**
     * @var \DateTime
     */
    protected $start = null;

    protected $_typeMap = array(
        'start' => 'dateTime',
        'end' => 'dateTime',
        'originalStart' => 'dateTime',
        'appointmentReplyTime' => 'dateTime',
    );

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
    public function getMeetingRequestType()
    {
        return $this->meetingRequestType;
    }

    /**
     * @return string
     */
    public function getIntendedFreeBusyStatus()
    {
        return $this->intendedFreeBusyStatus;
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
