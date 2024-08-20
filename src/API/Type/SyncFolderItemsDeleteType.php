<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SyncFolderItemsDeleteType
 *
 *
 * XSD Type: SyncFolderItemsDeleteType
 *
 * @method SyncFolderItemsDeleteType setItemId(ItemIdType $itemId)
 */
class SyncFolderItemsDeleteType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }
}
