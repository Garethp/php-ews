<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Type\IndexedPageViewType;

/**
 * Class representing FindFolderType
 *
 *
 * XSD Type: FindFolderType
 *
 * @method FindFolderType setTraversal(string $traversal)
 * @method FindFolderType setFolderShape(\garethp\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method FindFolderType setIndexedPageFolderView(\garethp\ews\API\Type\IndexedPageViewType $indexedPageFolderView)
 * @method FindFolderType setFractionalPageFolderView(\garethp\ews\API\Type\FractionalPageViewType $fractionalPageFolderView)
 * @method FindFolderType setRestriction(\garethp\ews\API\Type\RestrictionType $restriction)
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

    /**
     * @return string
     */
    public function getTraversal()
    {
        return $this->traversal;
    }

    /**
     * @return \garethp\ews\API\Type\FolderResponseShapeType
     */
    public function getFolderShape()
    {
        return $this->folderShape;
    }

    /**
     * @return \garethp\ews\API\Type\IndexedPageViewType
     */
    public function getIndexedPageFolderView()
    {
        return $this->indexedPageFolderView;
    }

    /**
     * @return \garethp\ews\API\Type\FractionalPageViewType
     */
    public function getFractionalPageFolderView()
    {
        return $this->fractionalPageFolderView;
    }

    /**
     * @return \garethp\ews\API\Type\RestrictionType
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    public function getParentFolderIds()
    {
        return $this->parentFolderIds;
    }
}
