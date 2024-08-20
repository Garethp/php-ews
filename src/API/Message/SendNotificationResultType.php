<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing SendNotificationResultType
 *
 *
 * XSD Type: SendNotificationResultType
 *
 * @method SendNotificationResultType setSubscriptionStatus(string $subscriptionStatus)
 */
class SendNotificationResultType extends Message
{

    /**
     * @var string
     */
    protected $subscriptionStatus = null;

    /**
     * @return string
     */
    public function getSubscriptionStatus()
    {
        return $this->subscriptionStatus;
    }
}
