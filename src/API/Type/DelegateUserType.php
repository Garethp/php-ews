<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing DelegateUserType
 *
 *
 * XSD Type: DelegateUserType
 *
 * @method UserIdType getUserId()
 * @method DelegateUserType setUserId(UserIdType $userId)
 * @method DelegatePermissionsType getDelegatePermissions()
 * @method DelegateUserType setDelegatePermissions(DelegatePermissionsType $delegatePermissions)
 * @method boolean getReceiveCopiesOfMeetingMessages()
 * @method DelegateUserType setReceiveCopiesOfMeetingMessages(boolean $receiveCopiesOfMeetingMessages)
 * @method boolean getViewPrivateItems()
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
     * @returns bool
     */
    public function isReceiveCopiesOfMeetingMessages()
    {
        return $this->receiveCopiesOfMeetingMessages && $this->receiveCopiesOfMeetingMessages;
    }

    /**
     * @returns bool
     */
    public function isViewPrivateItems()
    {
        return $this->viewPrivateItems && $this->viewPrivateItems;
    }
}
