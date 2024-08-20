<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SyncFolderItemsCreateOrUpdateType
 *
 *
 * XSD Type: SyncFolderItemsCreateOrUpdateType
 *
 * @method SyncFolderItemsCreateOrUpdateType setItem(ItemType $item)
 * @method SyncFolderItemsCreateOrUpdateType setMessage(MessageType $message)
 * @method SyncFolderItemsCreateOrUpdateType setCalendarItem(CalendarItemType $calendarItem)
 * @method SyncFolderItemsCreateOrUpdateType setContact(ContactItemType $contact)
 * @method SyncFolderItemsCreateOrUpdateType setDistributionList(DistributionListType $distributionList)
 * @method SyncFolderItemsCreateOrUpdateType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method SyncFolderItemsCreateOrUpdateType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method SyncFolderItemsCreateOrUpdateType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method SyncFolderItemsCreateOrUpdateType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method SyncFolderItemsCreateOrUpdateType setTask(TaskType $task)
 * @method SyncFolderItemsCreateOrUpdateType setPostItem(PostItemType $postItem)
 */
class SyncFolderItemsCreateOrUpdateType extends Type
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
