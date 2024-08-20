<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FolderChangeType
 *
 *
 * XSD Type: FolderChangeType
 *
 * @method FolderChangeType setFolderId(FolderIdType $folderId)
 * @method FolderChangeType setDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 * @method FolderChangeType setUpdates(NonEmptyArrayOfFolderChangeDescriptionsType $updates)
 */
class FolderChangeType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \garethp\ews\API\Type\DistinguishedFolderIdType
     */
    protected $distinguishedFolderId = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfFolderChangeDescriptionsType
     */
    protected $updates = null;

    /**
     * @return FolderIdType
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @return DistinguishedFolderIdType
     */
    public function getDistinguishedFolderId()
    {
        return $this->distinguishedFolderId;
    }

    /**
     * @return NonEmptyArrayOfFolderChangeDescriptionsType
     */
    public function getUpdates()
    {
        return $this->updates;
    }
}
