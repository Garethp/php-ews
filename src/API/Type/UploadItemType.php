<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing UploadItemType
 *
 *
 * XSD Type: UploadItemType
 *
 * @method UploadItemType setCreateAction(string $createAction)
 * @method UploadItemType setIsAssociated(boolean $isAssociated)
 * @method UploadItemType setParentFolderId(FolderIdType $parentFolderId)
 * @method UploadItemType setItemId(ItemIdType $itemId)
 * @method UploadItemType setData(string $data)
 */
class UploadItemType extends Type
{

    /**
     * @var string
     */
    protected $createAction = null;

    /**
     * @var boolean
     */
    protected $isAssociated = null;

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $data = null;

    /**
     * @return string
     */
    public function getCreateAction()
    {
        return $this->createAction;
    }

    /**
     * @returns bool
     */
    public function isAssociated()
    {
        return ((bool) $this->isAssociated);
    }

    /**
     * @return boolean
     */
    public function getIsAssociated()
    {
        return $this->isAssociated;
    }

    /**
     * @return FolderIdType
     */
    public function getParentFolderId()
    {
        return $this->parentFolderId;
    }

    /**
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
}
