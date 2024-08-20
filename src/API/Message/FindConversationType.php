<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindConversationType
 *
 *
 * XSD Type: FindConversationType
 *
 * @method FindConversationType setIndexedPageItemView(\garethp\ews\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method FindConversationType addSortOrder(\garethp\ews\API\Type\FieldOrderType $sortOrder)
 * @method FindConversationType setSortOrder(array $sortOrder)
 * @method FindConversationType setParentFolderId(\garethp\ews\API\Type\TargetFolderIdType $parentFolderId)
 */
class FindConversationType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\IndexedPageViewType
     */
    protected $indexedPageItemView = null;

    /**
     * @var \garethp\ews\API\Type\FieldOrderType[]
     */
    protected $sortOrder = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @return \garethp\ews\API\Type\IndexedPageViewType
     */
    public function getIndexedPageItemView()
    {
        return $this->indexedPageItemView;
    }

    /**
     * @return \garethp\ews\API\Type\FieldOrderType[]
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @return \garethp\ews\API\Type\TargetFolderIdType
     */
    public function getParentFolderId()
    {
        return $this->parentFolderId;
    }
}
