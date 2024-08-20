<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindFolderResponseMessageType
 *
 *
 * XSD Type: FindFolderResponseMessageType
 *
 * @method FindFolderResponseMessageType setRootFolder(\garethp\ews\API\Type\FindFolderParentType $rootFolder)
 */
class FindFolderResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\FindFolderParentType
     */
    protected $rootFolder = null;

    /**
     * @return \garethp\ews\API\Type\FindFolderParentType
     */
    public function getRootFolder()
    {
        return $this->rootFolder;
    }
}
