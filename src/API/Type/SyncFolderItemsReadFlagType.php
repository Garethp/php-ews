<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SyncFolderItemsReadFlagType
 *
 *
 * XSD Type: SyncFolderItemsReadFlagType
 *
 * @method ItemIdType getItemId()
 * @method SyncFolderItemsReadFlagType setItemId(ItemIdType $itemId)
 * @method boolean getIsRead()
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
     * @returns bool
     */
    public function isRead()
    {
        return $this->isRead && $this->isRead;
    }
}
