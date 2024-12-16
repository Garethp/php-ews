<?php

namespace garethp\ews\API\Type;

/**
 * Class representing AppendToItemFieldType
 *
 *
 * XSD Type: AppendToItemFieldType
 */
class AppendToItemFieldType extends ItemChangeDescriptionType
{

    /**
     * @var \garethp\ews\API\Type\ItemType
     */
    protected $item = null;

    /**
     * @var \garethp\ews\API\Type\MessageType
     */
    protected $message = null;

    /**
     * @var \garethp\ews\API\Type\CalendarItemType
     */
    protected $calendarItem = null;

    /**
     * @var \garethp\ews\API\Type\ContactItemType
     */
    protected $contact = null;

    /**
     * @var \garethp\ews\API\Type\DistributionListType
     */
    protected $distributionList = null;

    /**
     * @var \garethp\ews\API\Type\MeetingMessageType
     */
    protected $meetingMessage = null;

    /**
     * @var \garethp\ews\API\Type\MeetingRequestMessageType
     */
    protected $meetingRequest = null;

    /**
     * @var \garethp\ews\API\Type\MeetingResponseMessageType
     */
    protected $meetingResponse = null;

    /**
     * @var \garethp\ews\API\Type\MeetingCancellationMessageType
     */
    protected $meetingCancellation = null;

    /**
     * @var \garethp\ews\API\Type\TaskType
     */
    protected $task = null;

    /**
     * @var \garethp\ews\API\Type\PostItemType
     */
    protected $postItem = null;

    /**
     * @autogenerated This method is safe to replace
     * @return ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemType
     * @return AppendToItemFieldType
     */
    public function setItem(ItemType $value)
    {
        $this->item = $this->castValueIfNeeded("item", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return MessageType
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MessageType
     * @return AppendToItemFieldType
     */
    public function setMessage(MessageType $value)
    {
        $this->message = $this->castValueIfNeeded("message", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return CalendarItemType
     */
    public function getCalendarItem()
    {
        return $this->calendarItem;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value CalendarItemType
     * @return AppendToItemFieldType
     */
    public function setCalendarItem(CalendarItemType $value)
    {
        $this->calendarItem = $this->castValueIfNeeded("calendarItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ContactItemType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ContactItemType
     * @return AppendToItemFieldType
     */
    public function setContact(ContactItemType $value)
    {
        $this->contact = $this->castValueIfNeeded("contact", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return DistributionListType
     */
    public function getDistributionList()
    {
        return $this->distributionList;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DistributionListType
     * @return AppendToItemFieldType
     */
    public function setDistributionList(DistributionListType $value)
    {
        $this->distributionList = $this->castValueIfNeeded("distributionList", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return MeetingMessageType
     */
    public function getMeetingMessage()
    {
        return $this->meetingMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingMessageType
     * @return AppendToItemFieldType
     */
    public function setMeetingMessage(MeetingMessageType $value)
    {
        $this->meetingMessage = $this->castValueIfNeeded("meetingMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return MeetingRequestMessageType
     */
    public function getMeetingRequest()
    {
        return $this->meetingRequest;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingRequestMessageType
     * @return AppendToItemFieldType
     */
    public function setMeetingRequest(MeetingRequestMessageType $value)
    {
        $this->meetingRequest = $this->castValueIfNeeded("meetingRequest", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return MeetingResponseMessageType
     */
    public function getMeetingResponse()
    {
        return $this->meetingResponse;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingResponseMessageType
     * @return AppendToItemFieldType
     */
    public function setMeetingResponse(MeetingResponseMessageType $value)
    {
        $this->meetingResponse = $this->castValueIfNeeded("meetingResponse", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return MeetingCancellationMessageType
     */
    public function getMeetingCancellation()
    {
        return $this->meetingCancellation;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingCancellationMessageType
     * @return AppendToItemFieldType
     */
    public function setMeetingCancellation(MeetingCancellationMessageType $value)
    {
        $this->meetingCancellation = $this->castValueIfNeeded("meetingCancellation", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return TaskType
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TaskType
     * @return AppendToItemFieldType
     */
    public function setTask(TaskType $value)
    {
        $this->task = $this->castValueIfNeeded("task", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PostItemType
     */
    public function getPostItem()
    {
        return $this->postItem;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PostItemType
     * @return AppendToItemFieldType
     */
    public function setPostItem(PostItemType $value)
    {
        $this->postItem = $this->castValueIfNeeded("postItem", $value);
        return $this;
    }
}
