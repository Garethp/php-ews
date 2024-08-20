<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SubscribeResponseMessageType
 *
 *
 * XSD Type: SubscribeResponseMessageType
 *
 * @method SubscribeResponseMessageType setSubscriptionId(string $subscriptionId)
 * @method SubscribeResponseMessageType setWatermark(string $watermark)
 */
class SubscribeResponseMessageType extends ResponseMessageType
{

    /**
     * @var string
     */
    protected $subscriptionId = null;

    /**
     * @var string
     */
    protected $watermark = null;

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
    public function getWatermark()
    {
        return $this->watermark;
    }
}
