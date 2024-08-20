<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetFolderType
 *
 *
 * XSD Type: GetFolderType
 *
 * @method GetFolderType setFolderShape(\garethp\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method GetFolderType setFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class GetFolderType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;

    /**
     * @return \garethp\ews\API\Type\FolderResponseShapeType
     */
    public function getFolderShape()
    {
        return $this->folderShape;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    public function getFolderIds()
    {
        return $this->folderIds;
    }
}
