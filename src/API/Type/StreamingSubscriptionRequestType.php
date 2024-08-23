<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing StreamingSubscriptionRequestType
 *
 *
 * XSD Type: StreamingSubscriptionRequestType
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
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isSubscribeToAllFolders()
    {
        return ((bool) $this->subscribeToAllFolders);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getSubscribeToAllFolders()
    {
        return $this->subscribeToAllFolders;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return StreamingSubscriptionRequestType
     */
    public function setSubscribeToAllFolders($value)
    {
        $this->subscribeToAllFolders = $this->castValueIfNeeded("subscribeToAllFolders", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return NonEmptyArrayOfBaseFolderIdsType
     */
    public function getFolderIds()
    {
        return $this->folderIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value NonEmptyArrayOfBaseFolderIdsType
     * @return StreamingSubscriptionRequestType
     */
    public function setFolderIds(NonEmptyArrayOfBaseFolderIdsType $value)
    {
        $this->folderIds = $this->castValueIfNeeded("folderIds", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return StreamingSubscriptionRequestType
     */
    public function addEventTypes($value)
    {
        $value = $this->castValueIfNeeded("eventTypes", $value);

        if ($this->eventTypes === null) {
            $this->eventTypes = array();
        }

        if (!is_array($this->eventTypes)) {
            $this->eventTypes = array($this->eventTypes);
        }

        $this->eventTypes[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getEventTypes()
    {
        return $this->eventTypes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return StreamingSubscriptionRequestType
     */
    public function setEventTypes(array $value)
    {
        $this->eventTypes = $this->castValueIfNeeded("eventTypes", $value);
        return $this;
    }
}
