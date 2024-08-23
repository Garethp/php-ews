<?php

namespace garethp\ews\API\Type;

use Countable;
use ArrayAccess;
use IteratorAggregate;
use garethp\ews\API\Type;

/**
 * Class representing ArrayOfRealItemsType
 *
 *
 * XSD Type: ArrayOfRealItemsType
 *
 * @method ArrayOfRealItemsType addItem(ItemType $item)
 * @method ArrayOfRealItemsType addMessage(MessageType $message)
 * @method ArrayOfRealItemsType addCalendarItem(CalendarItemType $calendarItem)
 * @method ArrayOfRealItemsType addContact(ContactItemType $contact)
 * @method ArrayOfRealItemsType addDistributionList(DistributionListType $distributionList)
 * @method ArrayOfRealItemsType addMeetingMessage(MeetingMessageType $meetingMessage)
 * @method ArrayOfRealItemsType addMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method ArrayOfRealItemsType addMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method ArrayOfRealItemsType addMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method ArrayOfRealItemsType addTask(TaskType $task)
 * @method ArrayOfRealItemsType addPostItem(PostItemType $postItem)
 */
class ArrayOfRealItemsType extends Type implements Countable, ArrayAccess, IteratorAggregate
{

    /**
     * @var \garethp\ews\API\Type\ItemType[]
     */
    protected $item = null;

    /**
     * @var \garethp\ews\API\Type\MessageType[]
     */
    protected $message = null;

    /**
     * @var \garethp\ews\API\Type\CalendarItemType[]
     */
    protected $calendarItem = null;

    /**
     * @var \garethp\ews\API\Type\ContactItemType[]
     */
    protected $contact = null;

    /**
     * @var \garethp\ews\API\Type\DistributionListType[]
     */
    protected $distributionList = null;

    /**
     * @var \garethp\ews\API\Type\MeetingMessageType[]
     */
    protected $meetingMessage = null;

    /**
     * @var \garethp\ews\API\Type\MeetingRequestMessageType[]
     */
    protected $meetingRequest = null;

    /**
     * @var \garethp\ews\API\Type\MeetingResponseMessageType[]
     */
    protected $meetingResponse = null;

    /**
     * @var \garethp\ews\API\Type\MeetingCancellationMessageType[]
     */
    protected $meetingCancellation = null;

    /**
     * @var \garethp\ews\API\Type\TaskType[]
     */
    protected $task = null;

    /**
     * @var \garethp\ews\API\Type\PostItemType[]
     */
    protected $postItem = null;

    private $itemsArray = null;

    public function getItems()
    {
        if ($this->itemsArray) {
            return $this->itemsArray;
        }

        $items = array();

        foreach (get_object_vars($this) as $key => $value) {
            if ($key == "itemsArray" || substr($key, 0, 1) == "_" || $value === null) {
                continue;
            }

            if (!is_array($value)) {
                $value = array($value);
            }

            $items = array_merge($items, $value);
        }

        $this->itemsArray = $items;
        return $this->itemsArray;
    }

    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->getItems());
    }

    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->getItems()[$offset]);
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        $this->getItems();
        return isset($this->itemsArray[$offset]) ? $this->itemsArray[$offset] : null;
    }

    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        $this->getItems();

        if (is_null($offset)) {
            $this->itemsArray[] = $value;
        } else {
            $this->itemsArray[$offset] = $value;
        }
    }

    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        $this->getItems();
        unset($this->itemsArray[$offset]);
    }

    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        $this->getItems();
        return new \ArrayIterator($this->itemsArray);
    }

    /**
     * @return ItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @return MessageType[]
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return CalendarItemType[]
     */
    public function getCalendarItem()
    {
        return $this->calendarItem;
    }

    /**
     * @return ContactItemType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @return DistributionListType[]
     */
    public function getDistributionList()
    {
        return $this->distributionList;
    }

    /**
     * @return MeetingMessageType[]
     */
    public function getMeetingMessage()
    {
        return $this->meetingMessage;
    }

    /**
     * @return MeetingRequestMessageType[]
     */
    public function getMeetingRequest()
    {
        return $this->meetingRequest;
    }

    /**
     * @return MeetingResponseMessageType[]
     */
    public function getMeetingResponse()
    {
        return $this->meetingResponse;
    }

    /**
     * @return MeetingCancellationMessageType[]
     */
    public function getMeetingCancellation()
    {
        return $this->meetingCancellation;
    }

    /**
     * @return TaskType[]
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @return PostItemType[]
     */
    public function getPostItem()
    {
        return $this->postItem;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemType[]
     * @return ArrayOfRealItemsType
     */
    public function setItem(array $value)
    {
        $this->item = $this->castValueIfNeeded("item", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MessageType[]
     * @return ArrayOfRealItemsType
     */
    public function setMessage(array $value)
    {
        $this->message = $this->castValueIfNeeded("message", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value CalendarItemType[]
     * @return ArrayOfRealItemsType
     */
    public function setCalendarItem(array $value)
    {
        $this->calendarItem = $this->castValueIfNeeded("calendarItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ContactItemType[]
     * @return ArrayOfRealItemsType
     */
    public function setContact(array $value)
    {
        $this->contact = $this->castValueIfNeeded("contact", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DistributionListType[]
     * @return ArrayOfRealItemsType
     */
    public function setDistributionList(array $value)
    {
        $this->distributionList = $this->castValueIfNeeded("distributionList", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingMessageType[]
     * @return ArrayOfRealItemsType
     */
    public function setMeetingMessage(array $value)
    {
        $this->meetingMessage = $this->castValueIfNeeded("meetingMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingRequestMessageType[]
     * @return ArrayOfRealItemsType
     */
    public function setMeetingRequest(array $value)
    {
        $this->meetingRequest = $this->castValueIfNeeded("meetingRequest", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingResponseMessageType[]
     * @return ArrayOfRealItemsType
     */
    public function setMeetingResponse(array $value)
    {
        $this->meetingResponse = $this->castValueIfNeeded("meetingResponse", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingCancellationMessageType[]
     * @return ArrayOfRealItemsType
     */
    public function setMeetingCancellation(array $value)
    {
        $this->meetingCancellation = $this->castValueIfNeeded("meetingCancellation", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TaskType[]
     * @return ArrayOfRealItemsType
     */
    public function setTask(array $value)
    {
        $this->task = $this->castValueIfNeeded("task", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PostItemType[]
     * @return ArrayOfRealItemsType
     */
    public function setPostItem(array $value)
    {
        $this->postItem = $this->castValueIfNeeded("postItem", $value);
        return $this;
    }
}
