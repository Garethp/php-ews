<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateFolderType
 *
 *
 * XSD Type: UpdateFolderType
 *
 * @method UpdateFolderType addFolderChanges(\garethp\ews\API\Type\FolderChangeType $folderChanges)
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\FolderChangeType[]
     * @return UpdateFolderType
     */
    public function setFolderChanges(array $value)
    {
        $this->folderChanges = $this->castValueIfNeeded("folderChanges", $value);
        return $this;
    }
}
