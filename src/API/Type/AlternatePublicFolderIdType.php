<?php

namespace garethp\ews\API\Type;

/**
 * Class representing AlternatePublicFolderIdType
 *
 * Represents an alternate public folder Id.
 * XSD Type: AlternatePublicFolderIdType
 *
 * @method AlternatePublicFolderIdType setFolderId(string $folderId)
 */
class AlternatePublicFolderIdType extends AlternateIdBaseType
{

    /**
     * @var string
     */
    protected $folderId = null;

    /**
     * @return string
     */
    public function getFolderId()
    {
        return $this->folderId;
    }
}
