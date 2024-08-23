<?php

namespace garethp\ews\API\Type;

use Countable;
use ArrayAccess;
use IteratorAggregate;
use garethp\ews\API\Type;

/**
 * Class representing GroupedItemsType
 *
 *
 * XSD Type: GroupedItemsType
 */
class GroupedItemsType extends Type implements Countable, ArrayAccess, IteratorAggregate
{

    /**
     * @var string
     */
    protected $groupIndex = null;

    /**
     * @var \garethp\ews\API\Type\ArrayOfRealItemsType
     */
    protected $items = null;

    public function count()
    {
        return count($this->items);
    }

    public function offsetExists($offset)
    {
        return isset($this->items[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->items[$offset]) ? $this->items[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->items[] = $value;
        } else {
            $this->items[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->items->getIterator());
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getGroupIndex()
    {
        return $this->groupIndex;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return GroupedItemsType
     */
    public function setGroupIndex($value)
    {
        $this->groupIndex = $this->castValueIfNeeded("groupIndex", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ArrayOfRealItemsType
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ArrayOfRealItemsType
     * @return GroupedItemsType
     */
    public function setItems(ArrayOfRealItemsType $value)
    {
        $this->items = $this->castValueIfNeeded("items", $value);
        return $this;
    }
}
