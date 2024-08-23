<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SubscribeType
 *
 *
 * XSD Type: SubscribeType
 */
class SubscribeType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\PullSubscriptionRequestType
     */
    protected $pullSubscriptionRequest = null;

    /**
     * @var \garethp\ews\API\Type\PushSubscriptionRequestType
     */
    protected $pushSubscriptionRequest = null;

    /**
     * @var \garethp\ews\API\Type\StreamingSubscriptionRequestType
     */
    protected $streamingSubscriptionRequest = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\PullSubscriptionRequestType
     */
    public function getPullSubscriptionRequest()
    {
        return $this->pullSubscriptionRequest;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\PullSubscriptionRequestType
     * @return SubscribeType
     */
    public function setPullSubscriptionRequest(\garethp\ews\API\Type\PullSubscriptionRequestType $value)
    {
        $this->pullSubscriptionRequest = $this->castValueIfNeeded("pullSubscriptionRequest", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\PushSubscriptionRequestType
     */
    public function getPushSubscriptionRequest()
    {
        return $this->pushSubscriptionRequest;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\PushSubscriptionRequestType
     * @return SubscribeType
     */
    public function setPushSubscriptionRequest(\garethp\ews\API\Type\PushSubscriptionRequestType $value)
    {
        $this->pushSubscriptionRequest = $this->castValueIfNeeded("pushSubscriptionRequest", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\StreamingSubscriptionRequestType
     */
    public function getStreamingSubscriptionRequest()
    {
        return $this->streamingSubscriptionRequest;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\StreamingSubscriptionRequestType
     * @return SubscribeType
     */
    public function setStreamingSubscriptionRequest(\garethp\ews\API\Type\StreamingSubscriptionRequestType $value)
    {
        $this->streamingSubscriptionRequest = $this->castValueIfNeeded("streamingSubscriptionRequest", $value);
        return $this;
    }
}
