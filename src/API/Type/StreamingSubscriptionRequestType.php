<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing StreamingSubscriptionRequestType
 *
 *
 * XSD Type: StreamingSubscriptionRequestType
 *
 * @method StreamingSubscriptionRequestType setSubscribeToAllFolders(boolean $subscribeToAllFolders)
 * @method StreamingSubscriptionRequestType setFolderIds(NonEmptyArrayOfBaseFolderIdsType $folderIds)
 * @method StreamingSubscriptionRequestType addEventTypes(string $eventTypes)
 * @method StreamingSubscriptionRequestType setEventTypes(array $eventTypes)
 */
class StreamingSubscriptionRequestType extends Type
{

    /**
     * @var boolean
     */
    protected $subscribeToAllFolders = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;

    /**
     * @var string[]
     */
    protected $eventTypes = null;

    /**
     * @returns bool
     */
    public function isSubscribeToAllFolders()
    {
        return ((bool) $this->subscribeToAllFolders);
    }

    /**
     * @return boolean
     */
    public function getSubscribeToAllFolders()
    {
        return $this->subscribeToAllFolders;
    }

    /**
     * @return NonEmptyArrayOfBaseFolderIdsType
     */
    public function getFolderIds()
    {
        return $this->folderIds;
    }

    /**
     * @return string[]
     */
    public function getEventTypes()
    {
        return $this->eventTypes;
    }
}
