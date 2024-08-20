<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateItemType
 *
 *
 * XSD Type: UpdateItemType
 *
 * @method UpdateItemType setConflictResolution(string $conflictResolution)
 * @method UpdateItemType setMessageDisposition(string $messageDisposition)
 * @method UpdateItemType setSendMeetingInvitationsOrCancellations(string $sendMeetingInvitationsOrCancellations)
 * @method UpdateItemType setSavedItemFolderId(\garethp\ews\API\Type\TargetFolderIdType $savedItemFolderId)
 * @method UpdateItemType addItemChanges(\garethp\ews\API\Type\ItemChangeType $itemChanges)
 * @method UpdateItemType setItemChanges(array $itemChanges)
 */
class UpdateItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $conflictResolution = null;

    /**
     * @var string
     */
    protected $messageDisposition = null;

    /**
     * @var string
     */
    protected $sendMeetingInvitationsOrCancellations = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;

    /**
     * @var \garethp\ews\API\Type\ItemChangeType[]
     */
    protected $itemChanges = null;

    /**
     * @return string
     */
    public function getConflictResolution()
    {
        return $this->conflictResolution;
    }

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
    public function getSendMeetingInvitationsOrCancellations()
    {
        return $this->sendMeetingInvitationsOrCancellations;
    }

    /**
     * @return \garethp\ews\API\Type\TargetFolderIdType
     */
    public function getSavedItemFolderId()
    {
        return $this->savedItemFolderId;
    }

    /**
     * @return \garethp\ews\API\Type\ItemChangeType[]
     */
    public function getItemChanges()
    {
        return $this->itemChanges;
    }
}
