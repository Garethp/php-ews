<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PushSubscriptionRequestType
 *
 *
 * XSD Type: PushSubscriptionRequestType
 *
 * @method PushSubscriptionRequestType setStatusFrequency(integer $statusFrequency)
 * @method PushSubscriptionRequestType setURL(string $uRL)
 */
class PushSubscriptionRequestType extends BaseSubscriptionRequestType
{

    /**
     * @var integer
     */
    protected $statusFrequency = null;

    /**
     * @var string
     */
    protected $uRL = null;

    /**
     * @return integer
     */
    public function getStatusFrequency()
    {
        return $this->statusFrequency;
    }

    /**
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }
}
