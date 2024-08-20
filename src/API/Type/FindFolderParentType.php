<?php

namespace garethp\ews\API\Type;

use Countable;
use ArrayAccess;
use garethp\ews\API\Enumeration\IndexBasePointType;
use garethp\ews\API\Message\FindFolderType;
use IteratorAggregate;
use garethp\ews\API\Type;

/**
 * Class representing FindFolderParentType
 *
 *
 * XSD Type: FindFolderParentType
 *
 * @method integer getIndexedPagingOffset()
 * @method FindFolderParentType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method integer getNumeratorOffset()
 * @method FindFolderParentType setNumeratorOffset(integer $numeratorOffset)
 * @method integer getAbsoluteDenominator()
 * @method FindFolderParentType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method boolean getIncludesLastItemInRange()
 * @method FindFolderParentType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method integer getTotalItemsInView()
 * @method FindFolderParentType setTotalItemsInView(integer $totalItemsInView)
 * @method ArrayOfFoldersType getFolders()
 * @method FindFolderParentType setFolders(ArrayOfFoldersType $folders)
 */
class FindFolderParentType extends Type implements Countable, ArrayAccess, IteratorAggregate
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
     * @var FindFolderType
     */
    protected $lastRequest = null;

    /**
     * @var \garethp\ews\API\Type\ArrayOfFoldersType
     */
    protected $folders = null;

    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->folders);
    }

    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->folders[$offset]);
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->folders[$offset]) ? $this->folders[$offset] : null;
    }

    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            array_push($this->folders, $value);
        } else {
            $this->folders[$offset] = $value;
        }
    }

    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->folders[$offset]);
    }

    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        return new \ArrayIterator($this->folders->getIterator());
    }

    /**
     * @return FindFolderType
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
        $lastRequest = FindFolderType::buildFromArray($lastRequest->getNonNullItems());
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
        if ($this->lastRequest !== null && $this->lastRequest->getIndexedPageFolderView() != null) {
            return IndexedPageViewType::buildFromArray($this->lastRequest->getIndexedPageFolderView()->getNonNullItems());
        }

        return new IndexedPageViewType($this->count(), 0, IndexBasePointType::BEGINNING);
    }

    /**
     * @returns bool
     */
    public function isIncludesLastItemInRange()
    {
        return ((bool) $this->includesLastItemInRange);
    }
}
