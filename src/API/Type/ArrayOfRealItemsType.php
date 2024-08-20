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
 * @method ItemType[] getItem()
 * @method ArrayOfRealItemsType setItem(array $item)
 * @method ArrayOfRealItemsType addMessage(MessageType $message)
 * @method MessageType[] getMessage()
 * @method ArrayOfRealItemsType setMessage(array $message)
 * @method ArrayOfRealItemsType addCalendarItem(CalendarItemType $calendarItem)
 * @method CalendarItemType[] getCalendarItem()
 * @method ArrayOfRealItemsType setCalendarItem(array $calendarItem)
 * @method ArrayOfRealItemsType addContact(ContactItemType $contact)
 * @method ContactItemType[] getContact()
 * @method ArrayOfRealItemsType setContact(array $contact)
 * @method ArrayOfRealItemsType addDistributionList(DistributionListType $distributionList)
 * @method DistributionListType[] getDistributionList()
 * @method ArrayOfRealItemsType setDistributionList(array $distributionList)
 * @method ArrayOfRealItemsType addMeetingMessage(MeetingMessageType $meetingMessage)
 * @method MeetingMessageType[] getMeetingMessage()
 * @method ArrayOfRealItemsType setMeetingMessage(array $meetingMessage)
 * @method ArrayOfRealItemsType addMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method MeetingRequestMessageType[] getMeetingRequest()
 * @method ArrayOfRealItemsType setMeetingRequest(array $meetingRequest)
 * @method ArrayOfRealItemsType addMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method MeetingResponseMessageType[] getMeetingResponse()
 * @method ArrayOfRealItemsType setMeetingResponse(array $meetingResponse)
 * @method ArrayOfRealItemsType addMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method MeetingCancellationMessageType[] getMeetingCancellation()
 * @method ArrayOfRealItemsType setMeetingCancellation(array $meetingCancellation)
 * @method ArrayOfRealItemsType addTask(TaskType $task)
 * @method TaskType[] getTask()
 * @method ArrayOfRealItemsType setTask(array $task)
 * @method ArrayOfRealItemsType addPostItem(PostItemType $postItem)
 * @method PostItemType[] getPostItem()
 * @method ArrayOfRealItemsType setPostItem(array $postItem)
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
}
