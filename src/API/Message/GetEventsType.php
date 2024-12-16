<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetEventsType
 *
 *
 * XSD Type: GetEventsType
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
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return GetEventsType
     */
    public function setSubscriptionId($value)
    {
        $this->subscriptionId = $this->castValueIfNeeded("subscriptionId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getWatermark()
    {
        return $this->watermark;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return GetEventsType
     */
    public function setWatermark($value)
    {
        $this->watermark = $this->castValueIfNeeded("watermark", $value);
        return $this;
    }
}
