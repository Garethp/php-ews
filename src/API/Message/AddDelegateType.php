<?php

namespace garethp\ews\API\Message;

/**
 * Class representing AddDelegateType
 *
 *
 * XSD Type: AddDelegateType
 *
 * @method AddDelegateType addDelegateUsers(\garethp\ews\API\Type\DelegateUserType $delegateUsers)
 * @method AddDelegateType setDelegateUsers(array $delegateUsers)
 * @method AddDelegateType setDeliverMeetingRequests(string $deliverMeetingRequests)
 */
class AddDelegateType extends BaseDelegateType
{

    /**
     * @var \garethp\ews\API\Type\DelegateUserType[]
     */
    protected $delegateUsers = null;

    /**
     * @var string
     */
    protected $deliverMeetingRequests = null;

    /**
     * @return \garethp\ews\API\Type\DelegateUserType[]
     */
    public function getDelegateUsers()
    {
        return $this->delegateUsers;
    }

    /**
     * @return string
     */
    public function getDeliverMeetingRequests()
    {
        return $this->deliverMeetingRequests;
    }
}
