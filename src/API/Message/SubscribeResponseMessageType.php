<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SubscribeResponseMessageType
 *
 *
 * XSD Type: SubscribeResponseMessageType
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
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return SubscribeResponseMessageType
     */
    public function setSubscriptionId($value)
    {
        $this->subscriptionId = $this->castValueIfNeeded("subscriptionId", $value);
        return $this;
    }

    /**
     * @return string
     */
    public function getWatermark()
    {
        return $this->watermark;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return SubscribeResponseMessageType
     */
    public function setWatermark($value)
    {
        $this->watermark = $this->castValueIfNeeded("watermark", $value);
        return $this;
    }
}
