<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing BaseSubscriptionRequestType
 *
 *
 * XSD Type: BaseSubscriptionRequestType
 *
 * @method BaseSubscriptionRequestType setSubscribeToAllFolders(boolean $subscribeToAllFolders)
 * @method BaseSubscriptionRequestType setFolderIds(NonEmptyArrayOfBaseFolderIdsType $folderIds)
 * @method BaseSubscriptionRequestType addEventTypes(string $eventTypes)
 * @method BaseSubscriptionRequestType setEventTypes(array $eventTypes)
 * @method BaseSubscriptionRequestType setWatermark(string $watermark)
 */
class BaseSubscriptionRequestType extends Type
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
     * @var string
     */
    protected $watermark = null;

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

    /**
     * @return string
     */
    public function getWatermark()
    {
        return $this->watermark;
    }
}
