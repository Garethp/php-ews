<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NotificationType
 *
 *
 * XSD Type: NotificationType
 *
 * @method string getSubscriptionId()
 * @method NotificationType setSubscriptionId(string $subscriptionId)
 * @method string getPreviousWatermark()
 * @method NotificationType setPreviousWatermark(string $previousWatermark)
 * @method boolean getMoreEvents()
 * @method NotificationType setMoreEvents(boolean $moreEvents)
 * @method NotificationType addCopiedEvent(MovedCopiedEventType $copiedEvent)
 * @method MovedCopiedEventType[] getCopiedEvent()
 * @method NotificationType setCopiedEvent(array $copiedEvent)
 * @method NotificationType addCreatedEvent(BaseObjectChangedEventType $createdEvent)
 * @method BaseObjectChangedEventType[] getCreatedEvent()
 * @method NotificationType setCreatedEvent(array $createdEvent)
 * @method NotificationType addDeletedEvent(BaseObjectChangedEventType $deletedEvent)
 * @method BaseObjectChangedEventType[] getDeletedEvent()
 * @method NotificationType setDeletedEvent(array $deletedEvent)
 * @method NotificationType addModifiedEvent(ModifiedEventType $modifiedEvent)
 * @method ModifiedEventType[] getModifiedEvent()
 * @method NotificationType setModifiedEvent(array $modifiedEvent)
 * @method NotificationType addMovedEvent(MovedCopiedEventType $movedEvent)
 * @method MovedCopiedEventType[] getMovedEvent()
 * @method NotificationType setMovedEvent(array $movedEvent)
 * @method NotificationType addNewMailEvent(BaseObjectChangedEventType $newMailEvent)
 * @method BaseObjectChangedEventType[] getNewMailEvent()
 * @method NotificationType setNewMailEvent(array $newMailEvent)
 * @method NotificationType addStatusEvent(BaseNotificationEventType $statusEvent)
 * @method BaseNotificationEventType[] getStatusEvent()
 * @method NotificationType setStatusEvent(array $statusEvent)
 * @method NotificationType addFreeBusyChangedEvent(BaseObjectChangedEventType $freeBusyChangedEvent)
 * @method BaseObjectChangedEventType[] getFreeBusyChangedEvent()
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
     * @returns bool
     */
    public function isMoreEvents()
    {
        return ((bool) $this->moreEvents);
    }
}
