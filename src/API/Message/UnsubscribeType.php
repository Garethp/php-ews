<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UnsubscribeType
 *
 *
 * XSD Type: UnsubscribeType
 *
 * @method UnsubscribeType setSubscriptionId(string $subscriptionId)
 */
class UnsubscribeType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $subscriptionId = null;

    /**
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }
}
