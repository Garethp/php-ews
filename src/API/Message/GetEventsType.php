<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetEventsType
 *
 *
 * XSD Type: GetEventsType
 *
 * @method GetEventsType setSubscriptionId(string $subscriptionId)
 * @method GetEventsType setWatermark(string $watermark)
 */
class GetEventsType extends BaseRequestType
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
