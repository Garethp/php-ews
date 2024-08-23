<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PullSubscriptionRequestType
 *
 *
 * XSD Type: PullSubscriptionRequestType
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return PullSubscriptionRequestType
     */
    public function setTimeout($value)
    {
        $this->timeout = $this->castValueIfNeeded("timeout", $value);
        return $this;
    }
}
