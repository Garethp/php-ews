<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FolderInfoResponseMessageType
 *
 *
 * XSD Type: FolderInfoResponseMessageType
 *
 * @method FolderInfoResponseMessageType setFolders(\garethp\ews\API\Type\ArrayOfFoldersType $folders)
 */
class FolderInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ArrayOfFoldersType
     */
    protected $folders = null;

    /**
     * @return \garethp\ews\API\Type\ArrayOfFoldersType
     */
    public function getFolders()
    {
        return $this->folders;
    }
}
