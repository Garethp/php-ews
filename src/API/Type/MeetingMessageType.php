<?php

namespace garethp\ews\API\Type;

/**
 * Class representing MeetingMessageType
 *
 *
 * XSD Type: MeetingMessageType
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
     * @autogenerated This method is safe to replace
     * @return ItemIdType
     */
    public function getAssociatedCalendarItemId()
    {
        return $this->associatedCalendarItemId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return MeetingMessageType
     */
    public function setAssociatedCalendarItemId(ItemIdType $value)
    {
        $this->associatedCalendarItemId = $this->castValueIfNeeded("associatedCalendarItemId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isDelegated()
    {
        return ((bool) $this->isDelegated);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsDelegated()
    {
        return $this->isDelegated;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MeetingMessageType
     */
    public function setIsDelegated($value)
    {
        $this->isDelegated = $this->castValueIfNeeded("isDelegated", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isOutOfDate()
    {
        return ((bool) $this->isOutOfDate);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsOutOfDate()
    {
        return $this->isOutOfDate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MeetingMessageType
     */
    public function setIsOutOfDate($value)
    {
        $this->isOutOfDate = $this->castValueIfNeeded("isOutOfDate", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isHasBeenProcessed()
    {
        return ((bool) $this->hasBeenProcessed);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getHasBeenProcessed()
    {
        return $this->hasBeenProcessed;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MeetingMessageType
     */
    public function setHasBeenProcessed($value)
    {
        $this->hasBeenProcessed = $this->castValueIfNeeded("hasBeenProcessed", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingMessageType
     */
    public function setResponseType($value)
    {
        $this->responseType = $this->castValueIfNeeded("responseType", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getUID()
    {
        return $this->uID;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MeetingMessageType
     */
    public function setUID($value)
    {
        $this->uID = $this->castValueIfNeeded("uID", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getRecurrenceId()
    {
        return $this->recurrenceId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return MeetingMessageType
     */
    public function setRecurrenceId(\DateTime|string $value)
    {
        $this->recurrenceId = $this->castValueIfNeeded("recurrenceId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getDateTimeStamp()
    {
        return $this->dateTimeStamp;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return MeetingMessageType
     */
    public function setDateTimeStamp(\DateTime|string $value)
    {
        $this->dateTimeStamp = $this->castValueIfNeeded("dateTimeStamp", $value);
        return $this;
    }
}
