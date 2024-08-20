<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SubscribeType
 *
 *
 * XSD Type: SubscribeType
 *
 * @method SubscribeType setPullSubscriptionRequest(\garethp\ews\API\Type\PullSubscriptionRequestType $pullSubscriptionRequest)
 * @method SubscribeType setPushSubscriptionRequest(\garethp\ews\API\Type\PushSubscriptionRequestType $pushSubscriptionRequest)
 * @method SubscribeType setStreamingSubscriptionRequest(\garethp\ews\API\Type\StreamingSubscriptionRequestType $streamingSubscriptionRequest)
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
     * @return \garethp\ews\API\Type\PullSubscriptionRequestType
     */
    public function getPullSubscriptionRequest()
    {
        return $this->pullSubscriptionRequest;
    }

    /**
     * @return \garethp\ews\API\Type\PushSubscriptionRequestType
     */
    public function getPushSubscriptionRequest()
    {
        return $this->pushSubscriptionRequest;
    }

    /**
     * @return \garethp\ews\API\Type\StreamingSubscriptionRequestType
     */
    public function getStreamingSubscriptionRequest()
    {
        return $this->streamingSubscriptionRequest;
    }
}
