<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ConversationType
 *
 *
 * XSD Type: ConversationType
 *
 * @method ConversationType setConversationId(ItemIdType $conversationId)
 * @method ConversationType setConversationTopic(string $conversationTopic)
 * @method ConversationType addUniqueRecipients(string $uniqueRecipients)
 * @method ConversationType setUniqueRecipients(array $uniqueRecipients)
 * @method ConversationType addGlobalUniqueRecipients(string $globalUniqueRecipients)
 * @method ConversationType setGlobalUniqueRecipients(array $globalUniqueRecipients)
 * @method ConversationType addUniqueUnreadSenders(string $uniqueUnreadSenders)
 * @method ConversationType setUniqueUnreadSenders(array $uniqueUnreadSenders)
 * @method ConversationType addGlobalUniqueUnreadSenders(string $globalUniqueUnreadSenders)
 * @method ConversationType setGlobalUniqueUnreadSenders(array $globalUniqueUnreadSenders)
 * @method ConversationType addUniqueSenders(string $uniqueSenders)
 * @method ConversationType setUniqueSenders(array $uniqueSenders)
 * @method ConversationType addGlobalUniqueSenders(string $globalUniqueSenders)
 * @method ConversationType setGlobalUniqueSenders(array $globalUniqueSenders)
 * @method ConversationType setLastDeliveryTime(\DateTime $lastDeliveryTime)
 * @method ConversationType setGlobalLastDeliveryTime(\DateTime $globalLastDeliveryTime)
 * @method ConversationType addCategories(string $categories)
 * @method ConversationType setCategories(array $categories)
 * @method ConversationType addGlobalCategories(string $globalCategories)
 * @method ConversationType setGlobalCategories(array $globalCategories)
 * @method ConversationType setFlagStatus(string $flagStatus)
 * @method ConversationType setGlobalFlagStatus(string $globalFlagStatus)
 * @method ConversationType setHasAttachments(boolean $hasAttachments)
 * @method ConversationType setGlobalHasAttachments(boolean $globalHasAttachments)
 * @method ConversationType setMessageCount(integer $messageCount)
 * @method ConversationType setGlobalMessageCount(integer $globalMessageCount)
 * @method ConversationType setUnreadCount(integer $unreadCount)
 * @method ConversationType setGlobalUnreadCount(integer $globalUnreadCount)
 * @method ConversationType setSize(integer $size)
 * @method ConversationType setGlobalSize(integer $globalSize)
 * @method ConversationType addItemClasses(string $itemClasses)
 * @method ConversationType setItemClasses(array $itemClasses)
 * @method ConversationType addGlobalItemClasses(string $globalItemClasses)
 * @method ConversationType setGlobalItemClasses(array $globalItemClasses)
 * @method ConversationType setImportance(string $importance)
 * @method ConversationType setGlobalImportance(string $globalImportance)
 * @method ConversationType setItemIds(NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method ConversationType setGlobalItemIds(NonEmptyArrayOfBaseItemIdsType $globalItemIds)
 */
class ConversationType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $conversationId = null;

    /**
     * @var string
     */
    protected $conversationTopic = null;

    /**
     * @var string[]
     */
    protected $uniqueRecipients = null;

    /**
     * @var string[]
     */
    protected $globalUniqueRecipients = null;

    /**
     * @var string[]
     */
    protected $uniqueUnreadSenders = null;

    /**
     * @var string[]
     */
    protected $globalUniqueUnreadSenders = null;

    /**
     * @var string[]
     */
    protected $uniqueSenders = null;

    /**
     * @var string[]
     */
    protected $globalUniqueSenders = null;

    /**
     * @var \DateTime
     */
    protected $lastDeliveryTime = null;

    protected $_typeMap = array(
        'lastDeliveryTime' => 'dateTime',
        'globalLastDeliveryTime' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $globalLastDeliveryTime = null;

    /**
     * @var string[]
     */
    protected $categories = null;

    /**
     * @var string[]
     */
    protected $globalCategories = null;

    /**
     * @var string
     */
    protected $flagStatus = null;

    /**
     * @var string
     */
    protected $globalFlagStatus = null;

    /**
     * @var boolean
     */
    protected $hasAttachments = null;

    /**
     * @var boolean
     */
    protected $globalHasAttachments = null;

    /**
     * @var integer
     */
    protected $messageCount = null;

    /**
     * @var integer
     */
    protected $globalMessageCount = null;

    /**
     * @var integer
     */
    protected $unreadCount = null;

    /**
     * @var integer
     */
    protected $globalUnreadCount = null;

    /**
     * @var integer
     */
    protected $size = null;

    /**
     * @var integer
     */
    protected $globalSize = null;

    /**
     * @var string[]
     */
    protected $itemClasses = null;

    /**
     * @var string[]
     */
    protected $globalItemClasses = null;

    /**
     * @var string
     */
    protected $importance = null;

    /**
     * @var string
     */
    protected $globalImportance = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $globalItemIds = null;

    /**
     * @return ItemIdType
     */
    public function getConversationId()
    {
        return $this->conversationId;
    }

    /**
     * @return string
     */
    public function getConversationTopic()
    {
        return $this->conversationTopic;
    }

    /**
     * @return string[]
     */
    public function getUniqueRecipients()
    {
        return $this->uniqueRecipients;
    }

    /**
     * @return string[]
     */
    public function getGlobalUniqueRecipients()
    {
        return $this->globalUniqueRecipients;
    }

    /**
     * @return string[]
     */
    public function getUniqueUnreadSenders()
    {
        return $this->uniqueUnreadSenders;
    }

    /**
     * @return string[]
     */
    public function getGlobalUniqueUnreadSenders()
    {
        return $this->globalUniqueUnreadSenders;
    }

    /**
     * @return string[]
     */
    public function getUniqueSenders()
    {
        return $this->uniqueSenders;
    }

    /**
     * @return string[]
     */
    public function getGlobalUniqueSenders()
    {
        return $this->globalUniqueSenders;
    }

    /**
     * @return \DateTime
     */
    public function getLastDeliveryTime()
    {
        return $this->lastDeliveryTime;
    }

    /**
     * @return \DateTime
     */
    public function getGlobalLastDeliveryTime()
    {
        return $this->globalLastDeliveryTime;
    }

    /**
     * @return string[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @return string[]
     */
    public function getGlobalCategories()
    {
        return $this->globalCategories;
    }

    /**
     * @return string
     */
    public function getFlagStatus()
    {
        return $this->flagStatus;
    }

    /**
     * @return string
     */
    public function getGlobalFlagStatus()
    {
        return $this->globalFlagStatus;
    }

    /**
     * @returns bool
     */
    public function isHasAttachments()
    {
        return ((bool) $this->hasAttachments);
    }

    /**
     * @return boolean
     */
    public function getHasAttachments()
    {
        return $this->hasAttachments;
    }

    /**
     * @returns bool
     */
    public function isGlobalHasAttachments()
    {
        return ((bool) $this->globalHasAttachments);
    }

    /**
     * @return boolean
     */
    public function getGlobalHasAttachments()
    {
        return $this->globalHasAttachments;
    }

    /**
     * @return integer
     */
    public function getMessageCount()
    {
        return $this->messageCount;
    }

    /**
     * @return integer
     */
    public function getGlobalMessageCount()
    {
        return $this->globalMessageCount;
    }

    /**
     * @return integer
     */
    public function getUnreadCount()
    {
        return $this->unreadCount;
    }

    /**
     * @return integer
     */
    public function getGlobalUnreadCount()
    {
        return $this->globalUnreadCount;
    }

    /**
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return integer
     */
    public function getGlobalSize()
    {
        return $this->globalSize;
    }

    /**
     * @return string[]
     */
    public function getItemClasses()
    {
        return $this->itemClasses;
    }

    /**
     * @return string[]
     */
    public function getGlobalItemClasses()
    {
        return $this->globalItemClasses;
    }

    /**
     * @return string
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * @return string
     */
    public function getGlobalImportance()
    {
        return $this->globalImportance;
    }

    /**
     * @return NonEmptyArrayOfBaseItemIdsType
     */
    public function getItemIds()
    {
        return $this->itemIds;
    }

    /**
     * @return NonEmptyArrayOfBaseItemIdsType
     */
    public function getGlobalItemIds()
    {
        return $this->globalItemIds;
    }
}
