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
 * @method NonEmptyArrayOfAllItemsType addMessage(MessageType $message)
 * @method NonEmptyArrayOfAllItemsType addCalendarItem(CalendarItemType $calendarItem)
 * @method NonEmptyArrayOfAllItemsType addContact(ContactItemType $contact)
 * @method NonEmptyArrayOfAllItemsType addDistributionList(DistributionListType $distributionList)
 * @method NonEmptyArrayOfAllItemsType addMeetingMessage(MeetingMessageType $meetingMessage)
 * @method NonEmptyArrayOfAllItemsType addMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method NonEmptyArrayOfAllItemsType addMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method NonEmptyArrayOfAllItemsType addMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method NonEmptyArrayOfAllItemsType addTask(TaskType $task)
 * @method NonEmptyArrayOfAllItemsType addPostItem(PostItemType $postItem)
 * @method NonEmptyArrayOfAllItemsType addReplyToItem(ReplyToItemType $replyToItem)
 * @method NonEmptyArrayOfAllItemsType addForwardItem(ForwardItemType $forwardItem)
 * @method NonEmptyArrayOfAllItemsType addReplyAllToItem(ReplyAllToItemType $replyAllToItem)
 * @method NonEmptyArrayOfAllItemsType addAcceptItem(AcceptItemType $acceptItem)
 * @method NonEmptyArrayOfAllItemsType addTentativelyAcceptItem(TentativelyAcceptItemType $tentativelyAcceptItem)
 * @method NonEmptyArrayOfAllItemsType addDeclineItem(DeclineItemType $declineItem)
 * @method NonEmptyArrayOfAllItemsType addCancelCalendarItem(CancelCalendarItemType $cancelCalendarItem)
 * @method NonEmptyArrayOfAllItemsType addRemoveItem(RemoveItemType $removeItem)
 * @method NonEmptyArrayOfAllItemsType addSuppressReadReceipt(SuppressReadReceiptType $suppressReadReceipt)
 * @method NonEmptyArrayOfAllItemsType addPostReplyItem(PostReplyItemType $postReplyItem)
 * @method NonEmptyArrayOfAllItemsType addAcceptSharingInvitation(AcceptSharingInvitationType $acceptSharingInvitation)
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setItem(array $value)
    {
        $this->item = $this->castValueIfNeeded("item", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MessageType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setMessage(array $value)
    {
        $this->message = $this->castValueIfNeeded("message", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value CalendarItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setCalendarItem(array $value)
    {
        $this->calendarItem = $this->castValueIfNeeded("calendarItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ContactItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setContact(array $value)
    {
        $this->contact = $this->castValueIfNeeded("contact", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DistributionListType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setDistributionList(array $value)
    {
        $this->distributionList = $this->castValueIfNeeded("distributionList", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingMessageType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setMeetingMessage(array $value)
    {
        $this->meetingMessage = $this->castValueIfNeeded("meetingMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingRequestMessageType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setMeetingRequest(array $value)
    {
        $this->meetingRequest = $this->castValueIfNeeded("meetingRequest", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingResponseMessageType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setMeetingResponse(array $value)
    {
        $this->meetingResponse = $this->castValueIfNeeded("meetingResponse", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MeetingCancellationMessageType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setMeetingCancellation(array $value)
    {
        $this->meetingCancellation = $this->castValueIfNeeded("meetingCancellation", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TaskType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setTask(array $value)
    {
        $this->task = $this->castValueIfNeeded("task", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PostItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setPostItem(array $value)
    {
        $this->postItem = $this->castValueIfNeeded("postItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ReplyToItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setReplyToItem(array $value)
    {
        $this->replyToItem = $this->castValueIfNeeded("replyToItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ForwardItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setForwardItem(array $value)
    {
        $this->forwardItem = $this->castValueIfNeeded("forwardItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ReplyAllToItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setReplyAllToItem(array $value)
    {
        $this->replyAllToItem = $this->castValueIfNeeded("replyAllToItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AcceptItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setAcceptItem(array $value)
    {
        $this->acceptItem = $this->castValueIfNeeded("acceptItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TentativelyAcceptItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setTentativelyAcceptItem(array $value)
    {
        $this->tentativelyAcceptItem = $this->castValueIfNeeded("tentativelyAcceptItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DeclineItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setDeclineItem(array $value)
    {
        $this->declineItem = $this->castValueIfNeeded("declineItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value CancelCalendarItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setCancelCalendarItem(array $value)
    {
        $this->cancelCalendarItem = $this->castValueIfNeeded("cancelCalendarItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RemoveItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setRemoveItem(array $value)
    {
        $this->removeItem = $this->castValueIfNeeded("removeItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SuppressReadReceiptType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setSuppressReadReceipt(array $value)
    {
        $this->suppressReadReceipt = $this->castValueIfNeeded("suppressReadReceipt", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PostReplyItemType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setPostReplyItem(array $value)
    {
        $this->postReplyItem = $this->castValueIfNeeded("postReplyItem", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AcceptSharingInvitationType[]
     * @return NonEmptyArrayOfAllItemsType
     */
    public function setAcceptSharingInvitation(array $value)
    {
        $this->acceptSharingInvitation = $this->castValueIfNeeded("acceptSharingInvitation", $value);
        return $this;
    }
}
