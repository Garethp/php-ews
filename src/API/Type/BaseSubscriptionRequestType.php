<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing BaseSubscriptionRequestType
 *
 *
 * XSD Type: BaseSubscriptionRequestType
 *
 * @method BaseSubscriptionRequestType addEventTypes(string $eventTypes)
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
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return BaseSubscriptionRequestType
     */
    public function setSubscribeToAllFolders($value)
    {
        $this->subscribeToAllFolders = $this->castValueIfNeeded("subscribeToAllFolders", $value);
        return $this;
    }

    /**
     * @return NonEmptyArrayOfBaseFolderIdsType
     */
    public function getFolderIds()
    {
        return $this->folderIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value NonEmptyArrayOfBaseFolderIdsType
     * @return BaseSubscriptionRequestType
     */
    public function setFolderIds(NonEmptyArrayOfBaseFolderIdsType $value)
    {
        $this->folderIds = $this->castValueIfNeeded("folderIds", $value);
        return $this;
    }

    /**
     * @return string[]
     */
    public function getEventTypes()
    {
        return $this->eventTypes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return BaseSubscriptionRequestType
     */
    public function setEventTypes(array $value)
    {
        $this->eventTypes = $this->castValueIfNeeded("eventTypes", $value);
        return $this;
    }

    /**
     * @return string
     */
    public function getWatermark()
    {
        return $this->watermark;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return BaseSubscriptionRequestType
     */
    public function setWatermark($value)
    {
        $this->watermark = $this->castValueIfNeeded("watermark", $value);
        return $this;
    }
}
