<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetStreamingEventsResponseMessageType
 *
 *
 * XSD Type: GetStreamingEventsResponseMessageType
 *
 * @method GetStreamingEventsResponseMessageType addNotifications(\garethp\ews\API\Type\NotificationType $notifications)
 * @method GetStreamingEventsResponseMessageType setNotifications(array $notifications)
 * @method GetStreamingEventsResponseMessageType addErrorSubscriptionIds(string $errorSubscriptionIds)
 * @method GetStreamingEventsResponseMessageType setErrorSubscriptionIds(array $errorSubscriptionIds)
 * @method GetStreamingEventsResponseMessageType setConnectionStatus(string $connectionStatus)
 */
class GetStreamingEventsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\NotificationType[]
     */
    protected $notifications = null;

    /**
     * @var string[]
     */
    protected $errorSubscriptionIds = null;

    /**
     * @var string
     */
    protected $connectionStatus = null;

    /**
     * @return \garethp\ews\API\Type\NotificationType[]
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * @return string[]
     */
    public function getErrorSubscriptionIds()
    {
        return $this->errorSubscriptionIds;
    }

    /**
     * @return string
     */
    public function getConnectionStatus()
    {
        return $this->connectionStatus;
    }
}
