<?php

namespace garethp\ews\API\Type;

/**
 * Class representing AlternatePublicFolderItemIdType
 *
 * Represents an alternate public folder item Id.
 * XSD Type: AlternatePublicFolderItemIdType
 *
 * @method AlternatePublicFolderItemIdType setItemId(string $itemId)
 */
class AlternatePublicFolderItemIdType extends AlternatePublicFolderIdType
{

    /**
     * @var string
     */
    protected $itemId = null;

    /**
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }
}
