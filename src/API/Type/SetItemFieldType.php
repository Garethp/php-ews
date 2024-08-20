<?php

namespace garethp\ews\API\Type;

/**
 * Class representing SetItemFieldType
 *
 *
 * XSD Type: SetItemFieldType
 *
 * @method SetItemFieldType setItem(ItemType $item)
 * @method SetItemFieldType setMessage(MessageType $message)
 * @method SetItemFieldType setCalendarItem(CalendarItemType $calendarItem)
 * @method SetItemFieldType setContact(ContactItemType $contact)
 * @method SetItemFieldType setDistributionList(DistributionListType $distributionList)
 * @method SetItemFieldType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method SetItemFieldType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method SetItemFieldType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method SetItemFieldType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method SetItemFieldType setTask(TaskType $task)
 * @method SetItemFieldType setPostItem(PostItemType $postItem)
 */
class SetItemFieldType extends ItemChangeDescriptionType
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
