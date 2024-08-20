<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindItemResponseMessageType
 *
 *
 * XSD Type: FindItemResponseMessageType
 *
 * @method FindItemResponseMessageType setRootFolder(\garethp\ews\API\Type\FindItemParentType $rootFolder)
 */
class FindItemResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\FindItemParentType
     */
    protected $rootFolder = null;

    /**
     * @return \garethp\ews\API\Type\FindItemParentType
     */
    public function getRootFolder()
    {
        return $this->rootFolder;
    }
}
