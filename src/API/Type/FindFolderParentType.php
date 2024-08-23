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

    public function count()
    {
        return count($this->folders);
    }

    public function offsetExists($offset)
    {
        return isset($this->folders[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->folders[$offset]) ? $this->folders[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            array_push($this->folders, $value);
        } else {
            $this->folders[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->folders[$offset]);
    }

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
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getIndexedPagingOffset()
    {
        return $this->indexedPagingOffset;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return FindFolderParentType
     */
    public function setIndexedPagingOffset($value)
    {
        $this->indexedPagingOffset = $this->castValueIfNeeded("indexedPagingOffset", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getNumeratorOffset()
    {
        return $this->numeratorOffset;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return FindFolderParentType
     */
    public function setNumeratorOffset($value)
    {
        $this->numeratorOffset = $this->castValueIfNeeded("numeratorOffset", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getAbsoluteDenominator()
    {
        return $this->absoluteDenominator;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return FindFolderParentType
     */
    public function setAbsoluteDenominator($value)
    {
        $this->absoluteDenominator = $this->castValueIfNeeded("absoluteDenominator", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isIncludesLastItemInRange()
    {
        return ((bool) $this->includesLastItemInRange);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIncludesLastItemInRange()
    {
        return $this->includesLastItemInRange;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return FindFolderParentType
     */
    public function setIncludesLastItemInRange($value)
    {
        $this->includesLastItemInRange = $this->castValueIfNeeded("includesLastItemInRange", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getTotalItemsInView()
    {
        return $this->totalItemsInView;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return FindFolderParentType
     */
    public function setTotalItemsInView($value)
    {
        $this->totalItemsInView = $this->castValueIfNeeded("totalItemsInView", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ArrayOfFoldersType
     */
    public function getFolders()
    {
        return $this->folders;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ArrayOfFoldersType
     * @return FindFolderParentType
     */
    public function setFolders(ArrayOfFoldersType $value)
    {
        $this->folders = $this->castValueIfNeeded("folders", $value);
        return $this;
    }
}
