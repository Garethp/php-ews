<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PullSubscriptionRequestType
 *
 *
 * XSD Type: PullSubscriptionRequestType
 *
 * @method PullSubscriptionRequestType setTimeout(integer $timeout)
 */
class PullSubscriptionRequestType extends BaseSubscriptionRequestType
{

    /**
     * @var integer
     */
    protected $timeout = null;

    /**
     * @return integer
     */
    public function getTimeout()
    {
        return $this->timeout;
    }
}
