<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing DelegateUserType
 *
 *
 * XSD Type: DelegateUserType
 *
 * @method DelegateUserType setUserId(UserIdType $userId)
 * @method DelegateUserType setDelegatePermissions(DelegatePermissionsType $delegatePermissions)
 * @method DelegateUserType setReceiveCopiesOfMeetingMessages(boolean $receiveCopiesOfMeetingMessages)
 * @method DelegateUserType setViewPrivateItems(boolean $viewPrivateItems)
 */
class DelegateUserType extends Type
{

    /**
     * @var \garethp\ews\API\Type\UserIdType
     */
    protected $userId = null;

    /**
     * @var \garethp\ews\API\Type\DelegatePermissionsType
     */
    protected $delegatePermissions = null;

    /**
     * @var boolean
     */
    protected $receiveCopiesOfMeetingMessages = null;

    /**
     * @var boolean
     */
    protected $viewPrivateItems = null;

    /**
     * @return UserIdType
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return DelegatePermissionsType
     */
    public function getDelegatePermissions()
    {
        return $this->delegatePermissions;
    }

    /**
     * @returns bool
     */
    public function isReceiveCopiesOfMeetingMessages()
    {
        return ((bool) $this->receiveCopiesOfMeetingMessages);
    }

    /**
     * @return boolean
     */
    public function getReceiveCopiesOfMeetingMessages()
    {
        return $this->receiveCopiesOfMeetingMessages;
    }

    /**
     * @returns bool
     */
    public function isViewPrivateItems()
    {
        return ((bool) $this->viewPrivateItems);
    }

    /**
     * @return boolean
     */
    public function getViewPrivateItems()
    {
        return $this->viewPrivateItems;
    }
}
