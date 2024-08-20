<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Type\IndexedPageViewType;

/**
 * Class representing FindFolderType
 *
 *
 * XSD Type: FindFolderType
 *
 * @method string getTraversal()
 * @method FindFolderType setTraversal(string $traversal)
 * @method \garethp\ews\API\Type\FolderResponseShapeType getFolderShape()
 * @method FindFolderType setFolderShape(\garethp\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method \garethp\ews\API\Type\IndexedPageViewType getIndexedPageFolderView()
 * @method FindFolderType setIndexedPageFolderView(\garethp\ews\API\Type\IndexedPageViewType $indexedPageFolderView)
 * @method \garethp\ews\API\Type\FractionalPageViewType getFractionalPageFolderView()
 * @method FindFolderType setFractionalPageFolderView(\garethp\ews\API\Type\FractionalPageViewType $fractionalPageFolderView)
 * @method \garethp\ews\API\Type\RestrictionType getRestriction()
 * @method FindFolderType setRestriction(\garethp\ews\API\Type\RestrictionType $restriction)
 * @method \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getParentFolderIds()
 * @method FindFolderType setParentFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 */
class FindFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \garethp\ews\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \garethp\ews\API\Type\IndexedPageViewType
     */
    protected $indexedPageFolderView = null;

    /**
     * @var \garethp\ews\API\Type\FractionalPageViewType
     */
    protected $fractionalPageFolderView = null;

    /**
     * @var \garethp\ews\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $parentFolderIds = null;

    public function setIndexedPage(\garethp\ews\API\Type\IndexedPageViewType $page)
    {
        $this->indexedPageFolderView = $page;
        return $this;
    }
}
