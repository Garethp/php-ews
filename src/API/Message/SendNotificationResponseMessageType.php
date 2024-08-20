<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SendNotificationResponseMessageType
 *
 *
 * XSD Type: SendNotificationResponseMessageType
 *
 * @method SendNotificationResponseMessageType setNotification(\garethp\ews\API\Type\NotificationType $notification)
 */
class SendNotificationResponseMessageType extends ResponseMessageType
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
