<?php

namespace garethp\ews\API\Message;

/**
 * Class representing RemoveDelegateType
 *
 *
 * XSD Type: RemoveDelegateType
 *
 * @method RemoveDelegateType addUserIds(\garethp\ews\API\Type\UserIdType $userIds)
 * @method RemoveDelegateType setUserIds(array $userIds)
 */
class RemoveDelegateType extends BaseDelegateType
{

    /**
     * @var \garethp\ews\API\Type\UserIdType[]
     */
    protected $userIds = null;

    /**
     * @return \garethp\ews\API\Type\UserIdType[]
     */
    public function getUserIds()
    {
        return $this->userIds;
    }
}
