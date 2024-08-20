<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SyncFolderItemsReadFlagType
 *
 *
 * XSD Type: SyncFolderItemsReadFlagType
 *
 * @method SyncFolderItemsReadFlagType setItemId(ItemIdType $itemId)
 * @method SyncFolderItemsReadFlagType setIsRead(boolean $isRead)
 */
class SyncFolderItemsReadFlagType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var boolean
     */
    protected $isRead = null;

    /**
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @returns bool
     */
    public function isRead()
    {
        return ((bool) $this->isRead);
    }

    /**
     * @return boolean
     */
    public function getIsRead()
    {
        return $this->isRead;
    }
}
