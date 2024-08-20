<?php

namespace garethp\ews\API\Type;

use Countable;
use ArrayAccess;
use garethp\ews\API\Enumeration\IndexBasePointType;
use garethp\ews\API\Message\FindItemType;
use IteratorAggregate;
use garethp\ews\API\Type;

/**
 * Class representing FindItemParentType
 *
 *
 * XSD Type: FindItemParentType
 *
 * @method FindItemParentType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method FindItemParentType setNumeratorOffset(integer $numeratorOffset)
 * @method FindItemParentType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method FindItemParentType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method FindItemParentType setTotalItemsInView(integer $totalItemsInView)
 * @method FindItemParentType setItems(ArrayOfRealItemsType $items)
 * @method FindItemParentType addGroups(GroupedItemsType $groups)
 * @method FindItemParentType setGroups(array $groups)
 */
class FindItemParentType extends Type implements Countable, ArrayAccess, IteratorAggregate
{

    /**
     * @var integer
     */
    protected $indexedPagingOffset = null;

    /**
     * @var integer
     */
    protected $numeratorOffset = null;

    /**
     * @var integer
     */
    protected $absoluteDenominator = null;

    /**
     * @var boolean
     */
    protected $includesLastItemInRange = null;

    /**
     * @var integer
     */
    protected $totalItemsInView = null;

    /**
     * @var \garethp\ews\API\Type\ArrayOfRealItemsType
     */
    protected $items = null;

    /**
     * @var \garethp\ews\API\Type\GroupedItemsType[]
     */
    protected $groups = null;

    /**
     * @var FindItemType
     */
    protected $lastRequest = null;

    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->items);
    }

    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        $arrayAccessName = ($this->items != null ? 'items' : 'groups');
        return isset($this->{$arrayAccessName}[$offset]);
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        $arrayAccessName = ($this->items != null ? 'items' : 'groups');
        return isset($this->{$arrayAccessName}[$offset]) ? $this->{$arrayAccessName}[$offset] : null;
    }

    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        $arrayAccessName = ($this->items != null ? 'items' : 'groups');

        if (is_null($offset)) {
            array_push($this->{$arrayAccessName}, $value);
        } else {
            $this->{$arrayAccessName}[$offset] = $value;
        }
    }

    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        $arrayAccessName = ($this->items != null ? 'items' : 'groups');
        unset($this->{$arrayAccessName}[$offset]);
    }

    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        $arrayAccessName = ($this->items != null ? 'items' : 'groups');
        return new \ArrayIterator($this->{$arrayAccessName}->getIterator());
    }

    /**
     * @return FindItemType
     */
    public function getLastRequest()
    {
        return $this->lastRequest;
    }

    /**
     * @param Type $lastRequest
     */
    public function setLastRequest($lastRequest)
    {
        $lastRequest = FindItemType::buildFromArray($lastRequest->getNonNullItems());
        $this->lastRequest = $lastRequest;
    }

    /**
     * Either returns the IndexedPageItemView of the last request or returns a new one,
     * at index 0, Base Point Beginning
     * and MaxEntries equal to the count of this object
     *
     * @return IndexedPageViewType
     */
    public function getCurrentPage()
    {
        if ($this->lastRequest !== null && $this->lastRequest->getIndexedPageItemView() != null) {
            return IndexedPageViewType::buildFromArray($this->lastRequest->getIndexedPageItemView()->getNonNullItems());
        }

        return new IndexedPageViewType($this->count(), 0, IndexBasePointType::BEGINNING);
    }

    /**
     * @return integer
     */
    public function getIndexedPagingOffset()
    {
        return $this->indexedPagingOffset;
    }

    /**
     * @return integer
     */
    public function getNumeratorOffset()
    {
        return $this->numeratorOffset;
    }

    /**
     * @return integer
     */
    public function getAbsoluteDenominator()
    {
        return $this->absoluteDenominator;
    }

    /**
     * @returns bool
     */
    public function isIncludesLastItemInRange()
    {
        return ((bool) $this->includesLastItemInRange);
    }

    /**
     * @return boolean
     */
    public function getIncludesLastItemInRange()
    {
        return $this->includesLastItemInRange;
    }

    /**
     * @return integer
     */
    public function getTotalItemsInView()
    {
        return $this->totalItemsInView;
    }

    /**
     * @return ArrayOfRealItemsType
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return GroupedItemsType[]
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
