<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfAlternateIdsType
 *
 * A non-empty array of alternate Ids.
 * XSD Type: NonEmptyArrayOfAlternateIdsType
 *
 * @method NonEmptyArrayOfAlternateIdsType addAlternateId(AlternateIdType $alternateId)
 * @method NonEmptyArrayOfAlternateIdsType setAlternateId(array $alternateId)
 * @method NonEmptyArrayOfAlternateIdsType addAlternatePublicFolderId(AlternatePublicFolderIdType $alternatePublicFolderId)
 * @method NonEmptyArrayOfAlternateIdsType setAlternatePublicFolderId(array $alternatePublicFolderId)
 * @method NonEmptyArrayOfAlternateIdsType addAlternatePublicFolderItemId(AlternatePublicFolderItemIdType $alternatePublicFolderItemId)
 * @method NonEmptyArrayOfAlternateIdsType setAlternatePublicFolderItemId(array $alternatePublicFolderItemId)
 */
class NonEmptyArrayOfAlternateIdsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\AlternateIdType[]
     */
    protected $alternateId = null;

    /**
     * @var \garethp\ews\API\Type\AlternatePublicFolderIdType[]
     */
    protected $alternatePublicFolderId = null;

    /**
     * @var \garethp\ews\API\Type\AlternatePublicFolderItemIdType[]
     */
    protected $alternatePublicFolderItemId = null;

    /**
     * @return AlternateIdType[]
     */
    public function getAlternateId()
    {
        return $this->alternateId;
    }

    /**
     * @return AlternatePublicFolderIdType[]
     */
    public function getAlternatePublicFolderId()
    {
        return $this->alternatePublicFolderId;
    }

    /**
     * @return AlternatePublicFolderItemIdType[]
     */
    public function getAlternatePublicFolderItemId()
    {
        return $this->alternatePublicFolderItemId;
    }
}
