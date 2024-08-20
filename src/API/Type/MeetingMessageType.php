<?php

namespace garethp\ews\API\Type;

/**
 * Class representing MeetingMessageType
 *
 *
 * XSD Type: MeetingMessageType
 *
 * @method ItemIdType getAssociatedCalendarItemId()
 * @method MeetingMessageType setAssociatedCalendarItemId(ItemIdType $associatedCalendarItemId)
 * @method boolean getIsDelegated()
 * @method MeetingMessageType setIsDelegated(boolean $isDelegated)
 * @method boolean getIsOutOfDate()
 * @method MeetingMessageType setIsOutOfDate(boolean $isOutOfDate)
 * @method boolean getHasBeenProcessed()
 * @method MeetingMessageType setHasBeenProcessed(boolean $hasBeenProcessed)
 * @method string getResponseType()
 * @method MeetingMessageType setResponseType(string $responseType)
 * @method string getUID()
 * @method MeetingMessageType setUID(string $uID)
 * @method \DateTime getRecurrenceId()
 * @method MeetingMessageType setRecurrenceId(\DateTime $recurrenceId)
 * @method \DateTime getDateTimeStamp()
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
     * @returns bool
     */
    public function isDelegated()
    {
        return $this->isDelegated && $this->isDelegated;
    }

    /**
     * @returns bool
     */
    public function isOutOfDate()
    {
        return $this->isOutOfDate && $this->isOutOfDate;
    }

    /**
     * @returns bool
     */
    public function isHasBeenProcessed()
    {
        return $this->hasBeenProcessed && $this->hasBeenProcessed;
    }
}
