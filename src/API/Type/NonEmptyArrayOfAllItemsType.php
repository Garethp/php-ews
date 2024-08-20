<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfAllItemsType
 *
 *
 * XSD Type: NonEmptyArrayOfAllItemsType
 *
 * @method NonEmptyArrayOfAllItemsType addItem(ItemType $item)
 * @method NonEmptyArrayOfAllItemsType setItem(array $item)
 * @method NonEmptyArrayOfAllItemsType addMessage(MessageType $message)
 * @method NonEmptyArrayOfAllItemsType setMessage(array $message)
 * @method NonEmptyArrayOfAllItemsType addCalendarItem(CalendarItemType $calendarItem)
 * @method NonEmptyArrayOfAllItemsType setCalendarItem(array $calendarItem)
 * @method NonEmptyArrayOfAllItemsType addContact(ContactItemType $contact)
 * @method NonEmptyArrayOfAllItemsType setContact(array $contact)
 * @method NonEmptyArrayOfAllItemsType addDistributionList(DistributionListType $distributionList)
 * @method NonEmptyArrayOfAllItemsType setDistributionList(array $distributionList)
 * @method NonEmptyArrayOfAllItemsType addMeetingMessage(MeetingMessageType $meetingMessage)
 * @method NonEmptyArrayOfAllItemsType setMeetingMessage(array $meetingMessage)
 * @method NonEmptyArrayOfAllItemsType addMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method NonEmptyArrayOfAllItemsType setMeetingRequest(array $meetingRequest)
 * @method NonEmptyArrayOfAllItemsType addMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method NonEmptyArrayOfAllItemsType setMeetingResponse(array $meetingResponse)
 * @method NonEmptyArrayOfAllItemsType addMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method NonEmptyArrayOfAllItemsType setMeetingCancellation(array $meetingCancellation)
 * @method NonEmptyArrayOfAllItemsType addTask(TaskType $task)
 * @method NonEmptyArrayOfAllItemsType setTask(array $task)
 * @method NonEmptyArrayOfAllItemsType addPostItem(PostItemType $postItem)
 * @method NonEmptyArrayOfAllItemsType setPostItem(array $postItem)
 * @method NonEmptyArrayOfAllItemsType addReplyToItem(ReplyToItemType $replyToItem)
 * @method NonEmptyArrayOfAllItemsType setReplyToItem(array $replyToItem)
 * @method NonEmptyArrayOfAllItemsType addForwardItem(ForwardItemType $forwardItem)
 * @method NonEmptyArrayOfAllItemsType setForwardItem(array $forwardItem)
 * @method NonEmptyArrayOfAllItemsType addReplyAllToItem(ReplyAllToItemType $replyAllToItem)
 * @method NonEmptyArrayOfAllItemsType setReplyAllToItem(array $replyAllToItem)
 * @method NonEmptyArrayOfAllItemsType addAcceptItem(AcceptItemType $acceptItem)
 * @method NonEmptyArrayOfAllItemsType setAcceptItem(array $acceptItem)
 * @method NonEmptyArrayOfAllItemsType addTentativelyAcceptItem(TentativelyAcceptItemType $tentativelyAcceptItem)
 * @method NonEmptyArrayOfAllItemsType setTentativelyAcceptItem(array $tentativelyAcceptItem)
 * @method NonEmptyArrayOfAllItemsType addDeclineItem(DeclineItemType $declineItem)
 * @method NonEmptyArrayOfAllItemsType setDeclineItem(array $declineItem)
 * @method NonEmptyArrayOfAllItemsType addCancelCalendarItem(CancelCalendarItemType $cancelCalendarItem)
 * @method NonEmptyArrayOfAllItemsType setCancelCalendarItem(array $cancelCalendarItem)
 * @method NonEmptyArrayOfAllItemsType addRemoveItem(RemoveItemType $removeItem)
 * @method NonEmptyArrayOfAllItemsType setRemoveItem(array $removeItem)
 * @method NonEmptyArrayOfAllItemsType addSuppressReadReceipt(SuppressReadReceiptType $suppressReadReceipt)
 * @method NonEmptyArrayOfAllItemsType setSuppressReadReceipt(array $suppressReadReceipt)
 * @method NonEmptyArrayOfAllItemsType addPostReplyItem(PostReplyItemType $postReplyItem)
 * @method NonEmptyArrayOfAllItemsType setPostReplyItem(array $postReplyItem)
 * @method NonEmptyArrayOfAllItemsType addAcceptSharingInvitation(AcceptSharingInvitationType $acceptSharingInvitation)
 * @method NonEmptyArrayOfAllItemsType setAcceptSharingInvitation(array $acceptSharingInvitation)
 */
class NonEmptyArrayOfAllItemsType extends Type
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

    /**
     * @var \garethp\ews\API\Type\ReplyToItemType[]
     */
    protected $replyToItem = null;

    /**
     * @var \garethp\ews\API\Type\ForwardItemType[]
     */
    protected $forwardItem = null;

    /**
     * @var \garethp\ews\API\Type\ReplyAllToItemType[]
     */
    protected $replyAllToItem = null;

    /**
     * @var \garethp\ews\API\Type\AcceptItemType[]
     */
    protected $acceptItem = null;

    /**
     * @var \garethp\ews\API\Type\TentativelyAcceptItemType[]
     */
    protected $tentativelyAcceptItem = null;

    /**
     * @var \garethp\ews\API\Type\DeclineItemType[]
     */
    protected $declineItem = null;

    /**
     * @var \garethp\ews\API\Type\CancelCalendarItemType[]
     */
    protected $cancelCalendarItem = null;

    /**
     * @var \garethp\ews\API\Type\RemoveItemType[]
     */
    protected $removeItem = null;

    /**
     * @var \garethp\ews\API\Type\SuppressReadReceiptType[]
     */
    protected $suppressReadReceipt = null;

    /**
     * @var \garethp\ews\API\Type\PostReplyItemType[]
     */
    protected $postReplyItem = null;

    /**
     * @var \garethp\ews\API\Type\AcceptSharingInvitationType[]
     */
    protected $acceptSharingInvitation = null;

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
     * @return ReplyToItemType[]
     */
    public function getReplyToItem()
    {
        return $this->replyToItem;
    }

    /**
     * @return ForwardItemType[]
     */
    public function getForwardItem()
    {
        return $this->forwardItem;
    }

    /**
     * @return ReplyAllToItemType[]
     */
    public function getReplyAllToItem()
    {
        return $this->replyAllToItem;
    }

    /**
     * @return AcceptItemType[]
     */
    public function getAcceptItem()
    {
        return $this->acceptItem;
    }

    /**
     * @return TentativelyAcceptItemType[]
     */
    public function getTentativelyAcceptItem()
    {
        return $this->tentativelyAcceptItem;
    }

    /**
     * @return DeclineItemType[]
     */
    public function getDeclineItem()
    {
        return $this->declineItem;
    }

    /**
     * @return CancelCalendarItemType[]
     */
    public function getCancelCalendarItem()
    {
        return $this->cancelCalendarItem;
    }

    /**
     * @return RemoveItemType[]
     */
    public function getRemoveItem()
    {
        return $this->removeItem;
    }

    /**
     * @return SuppressReadReceiptType[]
     */
    public function getSuppressReadReceipt()
    {
        return $this->suppressReadReceipt;
    }

    /**
     * @return PostReplyItemType[]
     */
    public function getPostReplyItem()
    {
        return $this->postReplyItem;
    }

    /**
     * @return AcceptSharingInvitationType[]
     */
    public function getAcceptSharingInvitation()
    {
        return $this->acceptSharingInvitation;
    }
}
