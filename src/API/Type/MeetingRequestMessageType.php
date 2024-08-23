<?php

namespace garethp\ews\API\Type;

/**
 * Class representing MeetingRequestMessageType
 *
 *
 * XSD Type: MeetingRequestMessageType
 *
 * @method MeetingRequestMessageType addRequiredAttendees(AttendeeType $requiredAttendees)
 * @method MeetingRequestMessageType addOptionalAttendees(AttendeeType $optionalAttendees)
 * @method MeetingRequestMessageType addResources(AttendeeType $resources)
 * @method MeetingRequestMessageType addModifiedOccurrences(OccurrenceInfoType $modifiedOccurrences)
 * @method MeetingRequestMessageType addDeletedOccurrences(DeletedOccurrenceInfoType $deletedOccurrences)
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
     * @return boolean
     */
    public function getIsMeeting()
    {
        return $this->isMeeting;
    }

    /**
     * @return boolean
     */
    public function getIsCancelled()
    {
        return $this->isCancelled;
    }

    /**
     * @return boolean
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
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
     * @return boolean
     */
    public function getAllowNewTimeProposal()
    {
        return $this->allowNewTimeProposal;
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingRequestMessageType
     */
    public function setMeetingRequestType($value)
    {
        $this->meetingRequestType = $this->castValueIfNeeded("meetingRequestType", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingRequestMessageType
     */
    public function setIntendedFreeBusyStatus($value)
    {
        $this->intendedFreeBusyStatus = $this->castValueIfNeeded("intendedFreeBusyStatus", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return MeetingRequestMessageType
     */
    public function setStart(\DateTime|string $value)
    {
        $this->start = $this->castValueIfNeeded("start", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return MeetingRequestMessageType
     */
    public function setEnd(\DateTime|string $value)
    {
        $this->end = $this->castValueIfNeeded("end", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return MeetingRequestMessageType
     */
    public function setOriginalStart(\DateTime|string $value)
    {
        $this->originalStart = $this->castValueIfNeeded("originalStart", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isAllDayEvent()
    {
        return ((bool) $this->isAllDayEvent);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MeetingRequestMessageType
     */
    public function setIsAllDayEvent($value)
    {
        $this->isAllDayEvent = $this->castValueIfNeeded("isAllDayEvent", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingRequestMessageType
     */
    public function setLegacyFreeBusyStatus($value)
    {
        $this->legacyFreeBusyStatus = $this->castValueIfNeeded("legacyFreeBusyStatus", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingRequestMessageType
     */
    public function setLocation($value)
    {
        $this->location = $this->castValueIfNeeded("location", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingRequestMessageType
     */
    public function setWhen($value)
    {
        $this->when = $this->castValueIfNeeded("when", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isMeeting()
    {
        return ((bool) $this->isMeeting);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MeetingRequestMessageType
     */
    public function setIsMeeting($value)
    {
        $this->isMeeting = $this->castValueIfNeeded("isMeeting", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isCancelled()
    {
        return ((bool) $this->isCancelled);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MeetingRequestMessageType
     */
    public function setIsCancelled($value)
    {
        $this->isCancelled = $this->castValueIfNeeded("isCancelled", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isRecurring()
    {
        return ((bool) $this->isRecurring);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MeetingRequestMessageType
     */
    public function setIsRecurring($value)
    {
        $this->isRecurring = $this->castValueIfNeeded("isRecurring", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isMeetingRequestWasSent()
    {
        return ((bool) $this->meetingRequestWasSent);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MeetingRequestMessageType
     */
    public function setMeetingRequestWasSent($value)
    {
        $this->meetingRequestWasSent = $this->castValueIfNeeded("meetingRequestWasSent", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingRequestMessageType
     */
    public function setCalendarItemType($value)
    {
        $this->calendarItemType = $this->castValueIfNeeded("calendarItemType", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingRequestMessageType
     */
    public function setMyResponseType($value)
    {
        $this->myResponseType = $this->castValueIfNeeded("myResponseType", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SingleRecipientType
     * @return MeetingRequestMessageType
     */
    public function setOrganizer(SingleRecipientType $value)
    {
        $this->organizer = $this->castValueIfNeeded("organizer", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AttendeeType[]
     * @return MeetingRequestMessageType
     */
    public function setRequiredAttendees(array $value)
    {
        $this->requiredAttendees = $this->castValueIfNeeded("requiredAttendees", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AttendeeType[]
     * @return MeetingRequestMessageType
     */
    public function setOptionalAttendees(array $value)
    {
        $this->optionalAttendees = $this->castValueIfNeeded("optionalAttendees", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AttendeeType[]
     * @return MeetingRequestMessageType
     */
    public function setResources(array $value)
    {
        $this->resources = $this->castValueIfNeeded("resources", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return MeetingRequestMessageType
     */
    public function setConflictingMeetingCount($value)
    {
        $this->conflictingMeetingCount = $this->castValueIfNeeded("conflictingMeetingCount", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return MeetingRequestMessageType
     */
    public function setAdjacentMeetingCount($value)
    {
        $this->adjacentMeetingCount = $this->castValueIfNeeded("adjacentMeetingCount", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value NonEmptyArrayOfAllItemsType
     * @return MeetingRequestMessageType
     */
    public function setConflictingMeetings(NonEmptyArrayOfAllItemsType $value)
    {
        $this->conflictingMeetings = $this->castValueIfNeeded("conflictingMeetings", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value NonEmptyArrayOfAllItemsType
     * @return MeetingRequestMessageType
     */
    public function setAdjacentMeetings(NonEmptyArrayOfAllItemsType $value)
    {
        $this->adjacentMeetings = $this->castValueIfNeeded("adjacentMeetings", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingRequestMessageType
     */
    public function setDuration($value)
    {
        $this->duration = $this->castValueIfNeeded("duration", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingRequestMessageType
     */
    public function setTimeZone($value)
    {
        $this->timeZone = $this->castValueIfNeeded("timeZone", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return MeetingRequestMessageType
     */
    public function setAppointmentReplyTime(\DateTime|string $value)
    {
        $this->appointmentReplyTime = $this->castValueIfNeeded("appointmentReplyTime", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return MeetingRequestMessageType
     */
    public function setAppointmentSequenceNumber($value)
    {
        $this->appointmentSequenceNumber = $this->castValueIfNeeded("appointmentSequenceNumber", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return MeetingRequestMessageType
     */
    public function setAppointmentState($value)
    {
        $this->appointmentState = $this->castValueIfNeeded("appointmentState", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RecurrenceType
     * @return MeetingRequestMessageType
     */
    public function setRecurrence(RecurrenceType $value)
    {
        $this->recurrence = $this->castValueIfNeeded("recurrence", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value OccurrenceInfoType
     * @return MeetingRequestMessageType
     */
    public function setFirstOccurrence(OccurrenceInfoType $value)
    {
        $this->firstOccurrence = $this->castValueIfNeeded("firstOccurrence", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value OccurrenceInfoType
     * @return MeetingRequestMessageType
     */
    public function setLastOccurrence(OccurrenceInfoType $value)
    {
        $this->lastOccurrence = $this->castValueIfNeeded("lastOccurrence", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value OccurrenceInfoType[]
     * @return MeetingRequestMessageType
     */
    public function setModifiedOccurrences(array $value)
    {
        $this->modifiedOccurrences = $this->castValueIfNeeded("modifiedOccurrences", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DeletedOccurrenceInfoType[]
     * @return MeetingRequestMessageType
     */
    public function setDeletedOccurrences(array $value)
    {
        $this->deletedOccurrences = $this->castValueIfNeeded("deletedOccurrences", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TimeZoneType
     * @return MeetingRequestMessageType
     */
    public function setMeetingTimeZone(TimeZoneType $value)
    {
        $this->meetingTimeZone = $this->castValueIfNeeded("meetingTimeZone", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TimeZoneDefinitionType
     * @return MeetingRequestMessageType
     */
    public function setStartTimeZone(TimeZoneDefinitionType $value)
    {
        $this->startTimeZone = $this->castValueIfNeeded("startTimeZone", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TimeZoneDefinitionType
     * @return MeetingRequestMessageType
     */
    public function setEndTimeZone(TimeZoneDefinitionType $value)
    {
        $this->endTimeZone = $this->castValueIfNeeded("endTimeZone", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return MeetingRequestMessageType
     */
    public function setConferenceType($value)
    {
        $this->conferenceType = $this->castValueIfNeeded("conferenceType", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isAllowNewTimeProposal()
    {
        return ((bool) $this->allowNewTimeProposal);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MeetingRequestMessageType
     */
    public function setAllowNewTimeProposal($value)
    {
        $this->allowNewTimeProposal = $this->castValueIfNeeded("allowNewTimeProposal", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isOnlineMeeting()
    {
        return ((bool) $this->isOnlineMeeting);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MeetingRequestMessageType
     */
    public function setIsOnlineMeeting($value)
    {
        $this->isOnlineMeeting = $this->castValueIfNeeded("isOnlineMeeting", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingRequestMessageType
     */
    public function setMeetingWorkspaceUrl($value)
    {
        $this->meetingWorkspaceUrl = $this->castValueIfNeeded("meetingWorkspaceUrl", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingRequestMessageType
     */
    public function setNetShowUrl($value)
    {
        $this->netShowUrl = $this->castValueIfNeeded("netShowUrl", $value);
        return $this;
    }
}
