<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ItemAttachmentType
 *
 *
 * XSD Type: ItemAttachmentType
 *
 * @method ItemAttachmentType setItem(ItemType $item)
 * @method ItemAttachmentType setMessage(MessageType $message)
 * @method ItemAttachmentType setCalendarItem(CalendarItemType $calendarItem)
 * @method ItemAttachmentType setContact(ContactItemType $contact)
 * @method ItemAttachmentType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method ItemAttachmentType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method ItemAttachmentType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method ItemAttachmentType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method ItemAttachmentType setTask(TaskType $task)
 * @method ItemAttachmentType setPostItem(PostItemType $postItem)
 */
class ItemAttachmentType extends AttachmentType
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

    public function getItemAttachment()
    {
        if ($this->item) {
            return $this->item;
        }

        if ($this->message) {
            return $this->message;
        }

        if ($this->calendarItem) {
            return $this->calendarItem;
        }

        if ($this->meetingMessage) {
            return $this->meetingMessage;
        }

        if ($this->meetingResponse) {
            return $this->meetingResponse;
        }

        if ($this->meetingRequest) {
            return $this->meetingRequest;
        }

        if ($this->task) {
            return $this->task;
        }

        if ($this->postItem) {
            return $this->postItem;
        }

        return null;
    }

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
