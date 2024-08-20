<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseFolderIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseFolderIdsType
 *
 * @method NonEmptyArrayOfBaseFolderIdsType addFolderId(FolderIdType $folderId)
 * @method NonEmptyArrayOfBaseFolderIdsType setFolderId(array $folderId)
 * @method NonEmptyArrayOfBaseFolderIdsType addDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 * @method NonEmptyArrayOfBaseFolderIdsType setDistinguishedFolderId(array $distinguishedFolderId)
 */
class NonEmptyArrayOfBaseFolderIdsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType[]
     */
    protected $folderId = null;

    /**
     * @var \garethp\ews\API\Type\DistinguishedFolderIdType[]
     */
    protected $distinguishedFolderId = null;

    /**
     * @return FolderIdType[]
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @return DistinguishedFolderIdType[]
     */
    public function getDistinguishedFolderId()
    {
        return $this->distinguishedFolderId;
    }
}
