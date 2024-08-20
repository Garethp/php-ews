<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Type\IndexedPageViewType;

/**
 * Class representing FindItemType
 *
 *
 * XSD Type: FindItemType
 *
 * @method FindItemType setTraversal(string $traversal)
 * @method FindItemType setItemShape(\garethp\ews\API\Type\ItemResponseShapeType $itemShape)
 * @method FindItemType setIndexedPageItemView(\garethp\ews\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method FindItemType setFractionalPageItemView(\garethp\ews\API\Type\FractionalPageViewType $fractionalPageItemView)
 * @method FindItemType setCalendarView(\garethp\ews\API\Type\CalendarViewType $calendarView)
 * @method FindItemType setContactsView(\garethp\ews\API\Type\ContactsViewType $contactsView)
 * @method FindItemType setGroupBy(\garethp\ews\API\Type\GroupByType $groupBy)
 * @method FindItemType setDistinguishedGroupBy(\garethp\ews\API\Type\DistinguishedGroupByType $distinguishedGroupBy)
 * @method FindItemType setRestriction(\garethp\ews\API\Type\RestrictionType $restriction)
 * @method FindItemType addSortOrder(\garethp\ews\API\Type\FieldOrderType $sortOrder)
 * @method FindItemType setSortOrder(array $sortOrder)
 * @method FindItemType setParentFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 * @method FindItemType setQueryString(string $queryString)
 */
class FindItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \garethp\ews\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \garethp\ews\API\Type\IndexedPageViewType
     */
    protected $indexedPageItemView = null;

    /**
     * @var \garethp\ews\API\Type\FractionalPageViewType
     */
    protected $fractionalPageItemView = null;

    /**
     * @var \garethp\ews\API\Type\CalendarViewType
     */
    protected $calendarView = null;

    /**
     * @var \garethp\ews\API\Type\ContactsViewType
     */
    protected $contactsView = null;

    /**
     * @var \garethp\ews\API\Type\GroupByType
     */
    protected $groupBy = null;

    /**
     * @var \garethp\ews\API\Type\DistinguishedGroupByType
     */
    protected $distinguishedGroupBy = null;

    /**
     * @var \garethp\ews\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \garethp\ews\API\Type\FieldOrderType[]
     */
    protected $sortOrder = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $parentFolderIds = null;

    /**
     * @var string
     */
    protected $queryString = null;

    public function setIndexedPage(\garethp\ews\API\Type\IndexedPageViewType $page)
    {
        $this->indexedPageItemView = $page;
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
     * @return \garethp\ews\API\Type\ItemResponseShapeType
     */
    public function getItemShape()
    {
        return $this->itemShape;
    }

    /**
     * @return \garethp\ews\API\Type\IndexedPageViewType
     */
    public function getIndexedPageItemView()
    {
        return $this->indexedPageItemView;
    }

    /**
     * @return \garethp\ews\API\Type\FractionalPageViewType
     */
    public function getFractionalPageItemView()
    {
        return $this->fractionalPageItemView;
    }

    /**
     * @return \garethp\ews\API\Type\CalendarViewType
     */
    public function getCalendarView()
    {
        return $this->calendarView;
    }

    /**
     * @return \garethp\ews\API\Type\ContactsViewType
     */
    public function getContactsView()
    {
        return $this->contactsView;
    }

    /**
     * @return \garethp\ews\API\Type\GroupByType
     */
    public function getGroupBy()
    {
        return $this->groupBy;
    }

    /**
     * @return \garethp\ews\API\Type\DistinguishedGroupByType
     */
    public function getDistinguishedGroupBy()
    {
        return $this->distinguishedGroupBy;
    }

    /**
     * @return \garethp\ews\API\Type\RestrictionType
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * @return \garethp\ews\API\Type\FieldOrderType[]
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    public function getParentFolderIds()
    {
        return $this->parentFolderIds;
    }

    /**
     * @return string
     */
    public function getQueryString()
    {
        return $this->queryString;
    }
}
