<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfResponseObjectsType
 *
 *
 * XSD Type: NonEmptyArrayOfResponseObjectsType
 *
 * @method NonEmptyArrayOfResponseObjectsType addAcceptItem(AcceptItemType $acceptItem)
 * @method NonEmptyArrayOfResponseObjectsType setAcceptItem(array $acceptItem)
 * @method NonEmptyArrayOfResponseObjectsType addTentativelyAcceptItem(TentativelyAcceptItemType $tentativelyAcceptItem)
 * @method NonEmptyArrayOfResponseObjectsType setTentativelyAcceptItem(array $tentativelyAcceptItem)
 * @method NonEmptyArrayOfResponseObjectsType addDeclineItem(DeclineItemType $declineItem)
 * @method NonEmptyArrayOfResponseObjectsType setDeclineItem(array $declineItem)
 * @method NonEmptyArrayOfResponseObjectsType addReplyToItem(ReplyToItemType $replyToItem)
 * @method NonEmptyArrayOfResponseObjectsType setReplyToItem(array $replyToItem)
 * @method NonEmptyArrayOfResponseObjectsType addForwardItem(ForwardItemType $forwardItem)
 * @method NonEmptyArrayOfResponseObjectsType setForwardItem(array $forwardItem)
 * @method NonEmptyArrayOfResponseObjectsType addReplyAllToItem(ReplyAllToItemType $replyAllToItem)
 * @method NonEmptyArrayOfResponseObjectsType setReplyAllToItem(array $replyAllToItem)
 * @method NonEmptyArrayOfResponseObjectsType addCancelCalendarItem(CancelCalendarItemType $cancelCalendarItem)
 * @method NonEmptyArrayOfResponseObjectsType setCancelCalendarItem(array $cancelCalendarItem)
 * @method NonEmptyArrayOfResponseObjectsType addRemoveItem(RemoveItemType $removeItem)
 * @method NonEmptyArrayOfResponseObjectsType setRemoveItem(array $removeItem)
 * @method NonEmptyArrayOfResponseObjectsType addSuppressReadReceipt(SuppressReadReceiptType $suppressReadReceipt)
 * @method NonEmptyArrayOfResponseObjectsType setSuppressReadReceipt(array $suppressReadReceipt)
 * @method NonEmptyArrayOfResponseObjectsType addPostReplyItem(PostReplyItemType $postReplyItem)
 * @method NonEmptyArrayOfResponseObjectsType setPostReplyItem(array $postReplyItem)
 * @method NonEmptyArrayOfResponseObjectsType addAcceptSharingInvitation(AcceptSharingInvitationType $acceptSharingInvitation)
 * @method NonEmptyArrayOfResponseObjectsType setAcceptSharingInvitation(array $acceptSharingInvitation)
 */
class NonEmptyArrayOfResponseObjectsType extends Type
{

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
