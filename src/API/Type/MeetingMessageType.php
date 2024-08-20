<?php

namespace garethp\ews\API\Type;

/**
 * Class representing MeetingMessageType
 *
 *
 * XSD Type: MeetingMessageType
 *
 * @method MeetingMessageType setAssociatedCalendarItemId(ItemIdType $associatedCalendarItemId)
 * @method MeetingMessageType setIsDelegated(boolean $isDelegated)
 * @method MeetingMessageType setIsOutOfDate(boolean $isOutOfDate)
 * @method MeetingMessageType setHasBeenProcessed(boolean $hasBeenProcessed)
 * @method MeetingMessageType setResponseType(string $responseType)
 * @method MeetingMessageType setUID(string $uID)
 * @method MeetingMessageType setRecurrenceId(\DateTime $recurrenceId)
 * @method MeetingMessageType setDateTimeStamp(\DateTime $dateTimeStamp)
 */
class MeetingMessageType extends MessageType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $associatedCalendarItemId = null;

    /**
     * @var boolean
     */
    protected $isDelegated = null;

    /**
     * @var boolean
     */
    protected $isOutOfDate = null;

    /**
     * @var boolean
     */
    protected $hasBeenProcessed = null;

    /**
     * @var string
     */
    protected $responseType = null;

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
    );

    /**
     * @var \DateTime
     */
    protected $dateTimeStamp = null;

    /**
     * @return ItemIdType
     */
    public function getAssociatedCalendarItemId()
    {
        return $this->associatedCalendarItemId;
    }

    /**
     * @returns bool
     */
    public function isDelegated()
    {
        return ((bool) $this->isDelegated);
    }

    /**
     * @return boolean
     */
    public function getIsDelegated()
    {
        return $this->isDelegated;
    }

    /**
     * @returns bool
     */
    public function isOutOfDate()
    {
        return ((bool) $this->isOutOfDate);
    }

    /**
     * @return boolean
     */
    public function getIsOutOfDate()
    {
        return $this->isOutOfDate;
    }

    /**
     * @returns bool
     */
    public function isHasBeenProcessed()
    {
        return ((bool) $this->hasBeenProcessed);
    }

    /**
     * @return boolean
     */
    public function getHasBeenProcessed()
    {
        return $this->hasBeenProcessed;
    }

    /**
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

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
}
