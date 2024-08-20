<?php

namespace garethp\ews\API\Message;

/**
 * Class representing CreateItemType
 *
 *
 * XSD Type: CreateItemType
 *
 * @method CreateItemType setMessageDisposition(string $messageDisposition)
 * @method CreateItemType setSendMeetingInvitations(string $sendMeetingInvitations)
 * @method CreateItemType setSavedItemFolderId(\garethp\ews\API\Type\TargetFolderIdType $savedItemFolderId)
 * @method CreateItemType setItems(\garethp\ews\API\Type\NonEmptyArrayOfAllItemsType $items)
 */
class CreateItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $messageDisposition = null;

    /**
     * @var string
     */
    protected $sendMeetingInvitations = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfAllItemsType
     */
    protected $items = null;

    /**
     * @return string
     */
    public function getMessageDisposition()
    {
        return $this->messageDisposition;
    }

    /**
     * @return string
     */
    public function getSendMeetingInvitations()
    {
        return $this->sendMeetingInvitations;
    }

    /**
     * @return \garethp\ews\API\Type\TargetFolderIdType
     */
    public function getSavedItemFolderId()
    {
        return $this->savedItemFolderId;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfAllItemsType
     */
    public function getItems()
    {
        return $this->items;
    }
}
