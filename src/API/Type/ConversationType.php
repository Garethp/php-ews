<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ConversationType
 *
 *
 * XSD Type: ConversationType
 *
 * @method ConversationType addUniqueRecipients(string $uniqueRecipients)
 * @method ConversationType addGlobalUniqueRecipients(string $globalUniqueRecipients)
 * @method ConversationType addUniqueUnreadSenders(string $uniqueUnreadSenders)
 * @method ConversationType addGlobalUniqueUnreadSenders(string $globalUniqueUnreadSenders)
 * @method ConversationType addUniqueSenders(string $uniqueSenders)
 * @method ConversationType addGlobalUniqueSenders(string $globalUniqueSenders)
 * @method ConversationType addCategories(string $categories)
 * @method ConversationType addGlobalCategories(string $globalCategories)
 * @method ConversationType addItemClasses(string $itemClasses)
 * @method ConversationType addGlobalItemClasses(string $globalItemClasses)
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
     * @return boolean
     */
    public function getHasAttachments()
    {
        return $this->hasAttachments;
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return ConversationType
     */
    public function setConversationId(ItemIdType $value)
    {
        $this->conversationId = $this->castValueIfNeeded("conversationId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ConversationType
     */
    public function setConversationTopic($value)
    {
        $this->conversationTopic = $this->castValueIfNeeded("conversationTopic", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ConversationType
     */
    public function setUniqueRecipients(array $value)
    {
        $this->uniqueRecipients = $this->castValueIfNeeded("uniqueRecipients", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ConversationType
     */
    public function setGlobalUniqueRecipients(array $value)
    {
        $this->globalUniqueRecipients = $this->castValueIfNeeded("globalUniqueRecipients", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ConversationType
     */
    public function setUniqueUnreadSenders(array $value)
    {
        $this->uniqueUnreadSenders = $this->castValueIfNeeded("uniqueUnreadSenders", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ConversationType
     */
    public function setGlobalUniqueUnreadSenders(array $value)
    {
        $this->globalUniqueUnreadSenders = $this->castValueIfNeeded("globalUniqueUnreadSenders", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ConversationType
     */
    public function setUniqueSenders(array $value)
    {
        $this->uniqueSenders = $this->castValueIfNeeded("uniqueSenders", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ConversationType
     */
    public function setGlobalUniqueSenders(array $value)
    {
        $this->globalUniqueSenders = $this->castValueIfNeeded("globalUniqueSenders", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ConversationType
     */
    public function setLastDeliveryTime(\DateTime|string $value)
    {
        $this->lastDeliveryTime = $this->castValueIfNeeded("lastDeliveryTime", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ConversationType
     */
    public function setGlobalLastDeliveryTime(\DateTime|string $value)
    {
        $this->globalLastDeliveryTime = $this->castValueIfNeeded("globalLastDeliveryTime", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ConversationType
     */
    public function setCategories(array $value)
    {
        $this->categories = $this->castValueIfNeeded("categories", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ConversationType
     */
    public function setGlobalCategories(array $value)
    {
        $this->globalCategories = $this->castValueIfNeeded("globalCategories", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ConversationType
     */
    public function setFlagStatus($value)
    {
        $this->flagStatus = $this->castValueIfNeeded("flagStatus", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ConversationType
     */
    public function setGlobalFlagStatus($value)
    {
        $this->globalFlagStatus = $this->castValueIfNeeded("globalFlagStatus", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isHasAttachments()
    {
        return ((bool) $this->hasAttachments);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ConversationType
     */
    public function setHasAttachments($value)
    {
        $this->hasAttachments = $this->castValueIfNeeded("hasAttachments", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isGlobalHasAttachments()
    {
        return ((bool) $this->globalHasAttachments);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ConversationType
     */
    public function setGlobalHasAttachments($value)
    {
        $this->globalHasAttachments = $this->castValueIfNeeded("globalHasAttachments", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ConversationType
     */
    public function setMessageCount($value)
    {
        $this->messageCount = $this->castValueIfNeeded("messageCount", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ConversationType
     */
    public function setGlobalMessageCount($value)
    {
        $this->globalMessageCount = $this->castValueIfNeeded("globalMessageCount", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ConversationType
     */
    public function setUnreadCount($value)
    {
        $this->unreadCount = $this->castValueIfNeeded("unreadCount", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ConversationType
     */
    public function setGlobalUnreadCount($value)
    {
        $this->globalUnreadCount = $this->castValueIfNeeded("globalUnreadCount", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ConversationType
     */
    public function setSize($value)
    {
        $this->size = $this->castValueIfNeeded("size", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ConversationType
     */
    public function setGlobalSize($value)
    {
        $this->globalSize = $this->castValueIfNeeded("globalSize", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ConversationType
     */
    public function setItemClasses(array $value)
    {
        $this->itemClasses = $this->castValueIfNeeded("itemClasses", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ConversationType
     */
    public function setGlobalItemClasses(array $value)
    {
        $this->globalItemClasses = $this->castValueIfNeeded("globalItemClasses", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ConversationType
     */
    public function setImportance($value)
    {
        $this->importance = $this->castValueIfNeeded("importance", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ConversationType
     */
    public function setGlobalImportance($value)
    {
        $this->globalImportance = $this->castValueIfNeeded("globalImportance", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value NonEmptyArrayOfBaseItemIdsType
     * @return ConversationType
     */
    public function setItemIds(NonEmptyArrayOfBaseItemIdsType $value)
    {
        $this->itemIds = $this->castValueIfNeeded("itemIds", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value NonEmptyArrayOfBaseItemIdsType
     * @return ConversationType
     */
    public function setGlobalItemIds(NonEmptyArrayOfBaseItemIdsType $value)
    {
        $this->globalItemIds = $this->castValueIfNeeded("globalItemIds", $value);
        return $this;
    }
}
