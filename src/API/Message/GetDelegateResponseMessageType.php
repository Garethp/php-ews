<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetDelegateResponseMessageType
 *
 *
 * XSD Type: GetDelegateResponseMessageType
 *
 * @method GetDelegateResponseMessageType setDeliverMeetingRequests(string $deliverMeetingRequests)
 */
class GetDelegateResponseMessageType extends BaseDelegateResponseMessageType
{

    /**
     * @var string
     */
    protected $deliverMeetingRequests = null;

    /**
     * @return string
     */
    public function getDeliverMeetingRequests()
    {
        return $this->deliverMeetingRequests;
    }
}
