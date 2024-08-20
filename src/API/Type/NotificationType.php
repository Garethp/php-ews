<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NotificationType
 *
 *
 * XSD Type: NotificationType
 *
 * @method NotificationType setSubscriptionId(string $subscriptionId)
 * @method NotificationType setPreviousWatermark(string $previousWatermark)
 * @method NotificationType setMoreEvents(boolean $moreEvents)
 * @method NotificationType addCopiedEvent(MovedCopiedEventType $copiedEvent)
 * @method NotificationType setCopiedEvent(array $copiedEvent)
 * @method NotificationType addCreatedEvent(BaseObjectChangedEventType $createdEvent)
 * @method NotificationType setCreatedEvent(array $createdEvent)
 * @method NotificationType addDeletedEvent(BaseObjectChangedEventType $deletedEvent)
 * @method NotificationType setDeletedEvent(array $deletedEvent)
 * @method NotificationType addModifiedEvent(ModifiedEventType $modifiedEvent)
 * @method NotificationType setModifiedEvent(array $modifiedEvent)
 * @method NotificationType addMovedEvent(MovedCopiedEventType $movedEvent)
 * @method NotificationType setMovedEvent(array $movedEvent)
 * @method NotificationType addNewMailEvent(BaseObjectChangedEventType $newMailEvent)
 * @method NotificationType setNewMailEvent(array $newMailEvent)
 * @method NotificationType addStatusEvent(BaseNotificationEventType $statusEvent)
 * @method NotificationType setStatusEvent(array $statusEvent)
 * @method NotificationType addFreeBusyChangedEvent(BaseObjectChangedEventType $freeBusyChangedEvent)
 * @method NotificationType setFreeBusyChangedEvent(array $freeBusyChangedEvent)
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
     * @return string
     */
    public function getPreviousWatermark()
    {
        return $this->previousWatermark;
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
     * @return MovedCopiedEventType[]
     */
    public function getCopiedEvent()
    {
        return $this->copiedEvent;
    }

    /**
     * @return BaseObjectChangedEventType[]
     */
    public function getCreatedEvent()
    {
        return $this->createdEvent;
    }

    /**
     * @return BaseObjectChangedEventType[]
     */
    public function getDeletedEvent()
    {
        return $this->deletedEvent;
    }

    /**
     * @return ModifiedEventType[]
     */
    public function getModifiedEvent()
    {
        return $this->modifiedEvent;
    }

    /**
     * @return MovedCopiedEventType[]
     */
    public function getMovedEvent()
    {
        return $this->movedEvent;
    }

    /**
     * @return BaseObjectChangedEventType[]
     */
    public function getNewMailEvent()
    {
        return $this->newMailEvent;
    }

    /**
     * @return BaseNotificationEventType[]
     */
    public function getStatusEvent()
    {
        return $this->statusEvent;
    }

    /**
     * @return BaseObjectChangedEventType[]
     */
    public function getFreeBusyChangedEvent()
    {
        return $this->freeBusyChangedEvent;
    }
}
