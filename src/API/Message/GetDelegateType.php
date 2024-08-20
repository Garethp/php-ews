<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetDelegateType
 *
 *
 * XSD Type: GetDelegateType
 *
 * @method boolean getIncludePermissions()
 * @method GetDelegateType setIncludePermissions(boolean $includePermissions)
 * @method GetDelegateType addUserIds(\garethp\ews\API\Type\UserIdType $userIds)
 * @method \garethp\ews\API\Type\UserIdType[] getUserIds()
 * @method GetDelegateType setUserIds(array $userIds)
 */
class GetDelegateType extends BaseDelegateType
{

    /**
     * @var boolean
     */
    protected $includePermissions = null;

    /**
     * @var \garethp\ews\API\Type\UserIdType[]
     */
    protected $userIds = null;

    /**
     * @returns bool
     */
    public function isIncludePermissions()
    {
        return ((bool) $this->includePermissions);
    }
}
