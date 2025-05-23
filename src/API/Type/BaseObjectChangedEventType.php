<?php

namespace garethp\ews\API\Type;

/**
 * Class representing BaseObjectChangedEventType
 *
 *
 * XSD Type: BaseObjectChangedEventType
 */
class BaseObjectChangedEventType extends BaseNotificationEventType
{

    /**
     * @var \DateTime
     */
    protected $timeStamp = null;

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return BaseObjectChangedEventType
     */
    public function setTimeStamp(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->timeStamp = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderIdType
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderIdType
     * @return BaseObjectChangedEventType
     */
    public function setFolderId(FolderIdType $value)
    {
        $this->folderId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return BaseObjectChangedEventType
     */
    public function setItemId(ItemIdType $value)
    {
        $this->itemId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderIdType
     */
    public function getParentFolderId()
    {
        return $this->parentFolderId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderIdType
     * @return BaseObjectChangedEventType
     */
    public function setParentFolderId(FolderIdType $value)
    {
        $this->parentFolderId = $value;
        return $this;
    }
}
