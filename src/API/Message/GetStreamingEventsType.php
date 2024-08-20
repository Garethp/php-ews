<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetStreamingEventsType
 *
 *
 * XSD Type: GetStreamingEventsType
 *
 * @method GetStreamingEventsType addSubscriptionIds(string $subscriptionIds)
 * @method GetStreamingEventsType setSubscriptionIds(array $subscriptionIds)
 * @method GetStreamingEventsType setConnectionTimeout(integer $connectionTimeout)
 */
class GetStreamingEventsType extends BaseRequestType
{

    /**
     * @var string[]
     */
    protected $subscriptionIds = null;

    /**
     * @var integer
     */
    protected $connectionTimeout = null;

    /**
     * @return string[]
     */
    public function getSubscriptionIds()
    {
        return $this->subscriptionIds;
    }

    /**
     * @return integer
     */
    public function getConnectionTimeout()
    {
        return $this->connectionTimeout;
    }
}
