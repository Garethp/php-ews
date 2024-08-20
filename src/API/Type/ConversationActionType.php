<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ConversationActionType
 *
 *
 * XSD Type: ConversationActionType
 *
 * @method string getAction()
 * @method ConversationActionType setAction(string $action)
 * @method ItemIdType getConversationId()
 * @method ConversationActionType setConversationId(ItemIdType $conversationId)
 * @method TargetFolderIdType getContextFolderId()
 * @method ConversationActionType setContextFolderId(TargetFolderIdType $contextFolderId)
 * @method \DateTime getConversationLastSyncTime()
 * @method ConversationActionType setConversationLastSyncTime(\DateTime $conversationLastSyncTime)
 * @method boolean getProcessRightAway()
 * @method ConversationActionType setProcessRightAway(boolean $processRightAway)
 * @method TargetFolderIdType getDestinationFolderId()
 * @method ConversationActionType setDestinationFolderId(TargetFolderIdType $destinationFolderId)
 * @method ConversationActionType addCategories(string $categories)
 * @method string[] getCategories()
 * @method ConversationActionType setCategories(array $categories)
 * @method boolean getEnableAlwaysDelete()
 * @method ConversationActionType setEnableAlwaysDelete(boolean $enableAlwaysDelete)
 * @method boolean getIsRead()
 * @method ConversationActionType setIsRead(boolean $isRead)
 * @method string getDeleteType()
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
     * @returns bool
     */
    public function isProcessRightAway()
    {
        return $this->processRightAway && $this->processRightAway;
    }

    /**
     * @returns bool
     */
    public function isEnableAlwaysDelete()
    {
        return $this->enableAlwaysDelete && $this->enableAlwaysDelete;
    }

    /**
     * @returns bool
     */
    public function isRead()
    {
        return $this->isRead && $this->isRead;
    }
}
