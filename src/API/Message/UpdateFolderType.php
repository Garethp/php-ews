<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateFolderType
 *
 *
 * XSD Type: UpdateFolderType
 *
 * @method UpdateFolderType addFolderChanges(\garethp\ews\API\Type\FolderChangeType $folderChanges)
 * @method UpdateFolderType setFolderChanges(array $folderChanges)
 */
class UpdateFolderType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\FolderChangeType[]
     */
    protected $folderChanges = null;

    /**
     * @return \garethp\ews\API\Type\FolderChangeType[]
     */
    public function getFolderChanges()
    {
        return $this->folderChanges;
    }
}
