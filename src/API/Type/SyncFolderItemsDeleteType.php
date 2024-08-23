<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SyncFolderItemsDeleteType
 *
 *
 * XSD Type: SyncFolderItemsDeleteType
 */
class SyncFolderItemsDeleteType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

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
     * @return SyncFolderItemsDeleteType
     */
    public function setItemId(ItemIdType $value)
    {
        $this->itemId = $this->castValueIfNeeded("itemId", $value);
        return $this;
    }
}
