<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NotificationType
 *
 *
 * XSD Type: NotificationType
 *
 * @method NotificationType addCopiedEvent(MovedCopiedEventType $copiedEvent)
 * @method NotificationType addCreatedEvent(BaseObjectChangedEventType $createdEvent)
 * @method NotificationType addDeletedEvent(BaseObjectChangedEventType $deletedEvent)
 * @method NotificationType addModifiedEvent(ModifiedEventType $modifiedEvent)
 * @method NotificationType addMovedEvent(MovedCopiedEventType $movedEvent)
 * @method NotificationType addNewMailEvent(BaseObjectChangedEventType $newMailEvent)
 * @method NotificationType addStatusEvent(BaseNotificationEventType $statusEvent)
 * @method NotificationType addFreeBusyChangedEvent(BaseObjectChangedEventType $freeBusyChangedEvent)
 */
class NotificationType extends Type
{

    /**
     * @var string
     */
    protected $subscriptionId = null;

    /**
     * @var string
     */
    protected $previousWatermark = null;

    /**
     * @var boolean
     */
    protected $moreEvents = null;

    /**
     * @var \garethp\ews\API\Type\MovedCopiedEventType[]
     */
    protected $copiedEvent = null;

    /**
     * @var \garethp\ews\API\Type\BaseObjectChangedEventType[]
     */
    protected $createdEvent = null;

    /**
     * @var \garethp\ews\API\Type\BaseObjectChangedEventType[]
     */
    protected $deletedEvent = null;

    /**
     * @var \garethp\ews\API\Type\ModifiedEventType[]
     */
    protected $modifiedEvent = null;

    /**
     * @var \garethp\ews\API\Type\MovedCopiedEventType[]
     */
    protected $movedEvent = null;

    /**
     * @var \garethp\ews\API\Type\BaseObjectChangedEventType[]
     */
    protected $newMailEvent = null;

    /**
     * @var \garethp\ews\API\Type\BaseNotificationEventType[]
     */
    protected $statusEvent = null;

    /**
     * @var \garethp\ews\API\Type\BaseObjectChangedEventType[]
     */
    protected $freeBusyChangedEvent = null;

    /**
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return NotificationType
     */
    public function setSubscriptionId($value)
    {
        $this->subscriptionId = $this->castValueIfNeeded("subscriptionId", $value);
        return $this;
    }

    /**
     * @return string
     */
    public function getPreviousWatermark()
    {
        return $this->previousWatermark;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return NotificationType
     */
    public function setPreviousWatermark($value)
    {
        $this->previousWatermark = $this->castValueIfNeeded("previousWatermark", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isMoreEvents()
    {
        return ((bool) $this->moreEvents);
    }

    /**
     * @return boolean
     */
    public function getMoreEvents()
    {
        return $this->moreEvents;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return NotificationType
     */
    public function setMoreEvents($value)
    {
        $this->moreEvents = $this->castValueIfNeeded("moreEvents", $value);
        return $this;
    }

    /**
     * @return MovedCopiedEventType[]
     */
    public function getCopiedEvent()
    {
        return $this->copiedEvent;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MovedCopiedEventType[]
     * @return NotificationType
     */
    public function setCopiedEvent(array $value)
    {
        $this->copiedEvent = $this->castValueIfNeeded("copiedEvent", $value);
        return $this;
    }

    /**
     * @return BaseObjectChangedEventType[]
     */
    public function getCreatedEvent()
    {
        return $this->createdEvent;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BaseObjectChangedEventType[]
     * @return NotificationType
     */
    public function setCreatedEvent(array $value)
    {
        $this->createdEvent = $this->castValueIfNeeded("createdEvent", $value);
        return $this;
    }

    /**
     * @return BaseObjectChangedEventType[]
     */
    public function getDeletedEvent()
    {
        return $this->deletedEvent;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BaseObjectChangedEventType[]
     * @return NotificationType
     */
    public function setDeletedEvent(array $value)
    {
        $this->deletedEvent = $this->castValueIfNeeded("deletedEvent", $value);
        return $this;
    }

    /**
     * @return ModifiedEventType[]
     */
    public function getModifiedEvent()
    {
        return $this->modifiedEvent;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ModifiedEventType[]
     * @return NotificationType
     */
    public function setModifiedEvent(array $value)
    {
        $this->modifiedEvent = $this->castValueIfNeeded("modifiedEvent", $value);
        return $this;
    }

    /**
     * @return MovedCopiedEventType[]
     */
    public function getMovedEvent()
    {
        return $this->movedEvent;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MovedCopiedEventType[]
     * @return NotificationType
     */
    public function setMovedEvent(array $value)
    {
        $this->movedEvent = $this->castValueIfNeeded("movedEvent", $value);
        return $this;
    }

    /**
     * @return BaseObjectChangedEventType[]
     */
    public function getNewMailEvent()
    {
        return $this->newMailEvent;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BaseObjectChangedEventType[]
     * @return NotificationType
     */
    public function setNewMailEvent(array $value)
    {
        $this->newMailEvent = $this->castValueIfNeeded("newMailEvent", $value);
        return $this;
    }

    /**
     * @return BaseNotificationEventType[]
     */
    public function getStatusEvent()
    {
        return $this->statusEvent;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BaseNotificationEventType[]
     * @return NotificationType
     */
    public function setStatusEvent(array $value)
    {
        $this->statusEvent = $this->castValueIfNeeded("statusEvent", $value);
        return $this;
    }

    /**
     * @return BaseObjectChangedEventType[]
     */
    public function getFreeBusyChangedEvent()
    {
        return $this->freeBusyChangedEvent;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BaseObjectChangedEventType[]
     * @return NotificationType
     */
    public function setFreeBusyChangedEvent(array $value)
    {
        $this->freeBusyChangedEvent = $this->castValueIfNeeded("freeBusyChangedEvent", $value);
        return $this;
    }
}
