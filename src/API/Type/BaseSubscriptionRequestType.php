<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing BaseSubscriptionRequestType
 *
 *
 * XSD Type: BaseSubscriptionRequestType
 *
 * @method boolean getSubscribeToAllFolders()
 * @method BaseSubscriptionRequestType setSubscribeToAllFolders(boolean $subscribeToAllFolders)
 * @method NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method BaseSubscriptionRequestType setFolderIds(NonEmptyArrayOfBaseFolderIdsType $folderIds)
 * @method BaseSubscriptionRequestType addEventTypes(string $eventTypes)
 * @method string[] getEventTypes()
 * @method BaseSubscriptionRequestType setEventTypes(array $eventTypes)
 * @method string getWatermark()
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
}
