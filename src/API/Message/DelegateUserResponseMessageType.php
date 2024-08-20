<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DelegateUserResponseMessageType
 *
 *
 * XSD Type: DelegateUserResponseMessageType
 *
 * @method DelegateUserResponseMessageType setDelegateUser(\garethp\ews\API\Type\DelegateUserType $delegateUser)
 */
class DelegateUserResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\DelegateUserType
     */
    protected $delegateUser = null;

    /**
     * @return \garethp\ews\API\Type\DelegateUserType
     */
    public function getDelegateUser()
    {
        return $this->delegateUser;
    }
}
