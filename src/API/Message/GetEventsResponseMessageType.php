<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetEventsResponseMessageType
 *
 *
 * XSD Type: GetEventsResponseMessageType
 *
 * @method GetEventsResponseMessageType setNotification(\garethp\ews\API\Type\NotificationType $notification)
 */
class GetEventsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\NotificationType
     */
    protected $notification = null;

    /**
     * @return \garethp\ews\API\Type\NotificationType
     */
    public function getNotification()
    {
        return $this->notification;
    }
}
