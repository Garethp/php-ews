<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Type\IndexedPageViewType;

/**
 * Class representing FindItemType
 *
 *
 * XSD Type: FindItemType
 *
 * @method string getTraversal()
 * @method FindItemType setTraversal(string $traversal)
 * @method \garethp\ews\API\Type\ItemResponseShapeType getItemShape()
 * @method FindItemType setItemShape(\garethp\ews\API\Type\ItemResponseShapeType $itemShape)
 * @method \garethp\ews\API\Type\IndexedPageViewType getIndexedPageItemView()
 * @method FindItemType setIndexedPageItemView(\garethp\ews\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method \garethp\ews\API\Type\FractionalPageViewType getFractionalPageItemView()
 * @method FindItemType setFractionalPageItemView(\garethp\ews\API\Type\FractionalPageViewType $fractionalPageItemView)
 * @method \garethp\ews\API\Type\CalendarViewType getCalendarView()
 * @method FindItemType setCalendarView(\garethp\ews\API\Type\CalendarViewType $calendarView)
 * @method \garethp\ews\API\Type\ContactsViewType getContactsView()
 * @method FindItemType setContactsView(\garethp\ews\API\Type\ContactsViewType $contactsView)
 * @method \garethp\ews\API\Type\GroupByType getGroupBy()
 * @method FindItemType setGroupBy(\garethp\ews\API\Type\GroupByType $groupBy)
 * @method \garethp\ews\API\Type\DistinguishedGroupByType getDistinguishedGroupBy()
 * @method FindItemType setDistinguishedGroupBy(\garethp\ews\API\Type\DistinguishedGroupByType $distinguishedGroupBy)
 * @method \garethp\ews\API\Type\RestrictionType getRestriction()
 * @method FindItemType setRestriction(\garethp\ews\API\Type\RestrictionType $restriction)
 * @method FindItemType addSortOrder(\garethp\ews\API\Type\FieldOrderType $sortOrder)
 * @method \garethp\ews\API\Type\FieldOrderType[] getSortOrder()
 * @method FindItemType setSortOrder(array $sortOrder)
 * @method \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getParentFolderIds()
 * @method FindItemType setParentFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 * @method string getQueryString()
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
}
