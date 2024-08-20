<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateDelegateType
 *
 *
 * XSD Type: UpdateDelegateType
 *
 * @method UpdateDelegateType addDelegateUsers(\garethp\ews\API\Type\DelegateUserType $delegateUsers)
 * @method UpdateDelegateType setDelegateUsers(array $delegateUsers)
 * @method UpdateDelegateType setDeliverMeetingRequests(string $deliverMeetingRequests)
 */
class UpdateDelegateType extends BaseDelegateType
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
