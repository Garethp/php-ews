<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ConversationActionType
 *
 *
 * XSD Type: ConversationActionType
 *
 * @method ConversationActionType setAction(string $action)
 * @method ConversationActionType setConversationId(ItemIdType $conversationId)
 * @method ConversationActionType setContextFolderId(TargetFolderIdType $contextFolderId)
 * @method ConversationActionType setConversationLastSyncTime(\DateTime $conversationLastSyncTime)
 * @method ConversationActionType setProcessRightAway(boolean $processRightAway)
 * @method ConversationActionType setDestinationFolderId(TargetFolderIdType $destinationFolderId)
 * @method ConversationActionType addCategories(string $categories)
 * @method ConversationActionType setCategories(array $categories)
 * @method ConversationActionType setEnableAlwaysDelete(boolean $enableAlwaysDelete)
 * @method ConversationActionType setIsRead(boolean $isRead)
 * @method ConversationActionType setDeleteType(string $deleteType)
 */
class ConversationActionType extends Type
{

    /**
     * @var string
     */
    protected $action = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $conversationId = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $contextFolderId = null;

    /**
     * @var \DateTime
     */
    protected $conversationLastSyncTime = null;

    protected $_typeMap = array(
        'conversationLastSyncTime' => 'dateTime',
    );

    /**
     * @var boolean
     */
    protected $processRightAway = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $destinationFolderId = null;

    /**
     * @var string[]
     */
    protected $categories = null;

    /**
     * @var boolean
     */
    protected $enableAlwaysDelete = null;

    /**
     * @var boolean
     */
    protected $isRead = null;

    /**
     * @var string
     */
    protected $deleteType = null;

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return ItemIdType
     */
    public function getConversationId()
    {
        return $this->conversationId;
    }

    /**
     * @return TargetFolderIdType
     */
    public function getContextFolderId()
    {
        return $this->contextFolderId;
    }

    /**
     * @return \DateTime
     */
    public function getConversationLastSyncTime()
    {
        return $this->conversationLastSyncTime;
    }

    /**
     * @returns bool
     */
    public function isProcessRightAway()
    {
        return ((bool) $this->processRightAway);
    }

    /**
     * @return boolean
     */
    public function getProcessRightAway()
    {
        return $this->processRightAway;
    }

    /**
     * @return TargetFolderIdType
     */
    public function getDestinationFolderId()
    {
        return $this->destinationFolderId;
    }

    /**
     * @return string[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @returns bool
     */
    public function isEnableAlwaysDelete()
    {
        return ((bool) $this->enableAlwaysDelete);
    }

    /**
     * @return boolean
     */
    public function getEnableAlwaysDelete()
    {
        return $this->enableAlwaysDelete;
    }

    /**
     * @returns bool
     */
    public function isRead()
    {
        return ((bool) $this->isRead);
    }

    /**
     * @return boolean
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * @return string
     */
    public function getDeleteType()
    {
        return $this->deleteType;
    }
}
