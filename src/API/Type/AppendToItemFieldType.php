<?php

namespace garethp\ews\API\Type;

/**
 * Class representing AppendToItemFieldType
 *
 *
 * XSD Type: AppendToItemFieldType
 *
 * @method AppendToItemFieldType setItem(ItemType $item)
 * @method AppendToItemFieldType setMessage(MessageType $message)
 * @method AppendToItemFieldType setCalendarItem(CalendarItemType $calendarItem)
 * @method AppendToItemFieldType setContact(ContactItemType $contact)
 * @method AppendToItemFieldType setDistributionList(DistributionListType $distributionList)
 * @method AppendToItemFieldType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method AppendToItemFieldType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method AppendToItemFieldType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method AppendToItemFieldType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method AppendToItemFieldType setTask(TaskType $task)
 * @method AppendToItemFieldType setPostItem(PostItemType $postItem)
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
     * @return ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @return MessageType
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return CalendarItemType
     */
    public function getCalendarItem()
    {
        return $this->calendarItem;
    }

    /**
     * @return ContactItemType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @return DistributionListType
     */
    public function getDistributionList()
    {
        return $this->distributionList;
    }

    /**
     * @return MeetingMessageType
     */
    public function getMeetingMessage()
    {
        return $this->meetingMessage;
    }

    /**
     * @return MeetingRequestMessageType
     */
    public function getMeetingRequest()
    {
        return $this->meetingRequest;
    }

    /**
     * @return MeetingResponseMessageType
     */
    public function getMeetingResponse()
    {
        return $this->meetingResponse;
    }

    /**
     * @return MeetingCancellationMessageType
     */
    public function getMeetingCancellation()
    {
        return $this->meetingCancellation;
    }

    /**
     * @return TaskType
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @return PostItemType
     */
    public function getPostItem()
    {
        return $this->postItem;
    }
}
