<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PostItemType
 *
 *
 * XSD Type: PostItemType
 *
 * @method PostItemType setConversationIndex(string $conversationIndex)
 * @method PostItemType setConversationTopic(string $conversationTopic)
 * @method PostItemType setFrom(SingleRecipientType $from)
 * @method PostItemType setInternetMessageId(string $internetMessageId)
 * @method PostItemType setIsRead(boolean $isRead)
 * @method PostItemType setPostedTime(\DateTime $postedTime)
 * @method PostItemType setReferences(string $references)
 * @method PostItemType setSender(SingleRecipientType $sender)
 */
class PostItemType extends ItemType
{

    /**
     * @var string
     */
    protected $conversationIndex = null;

    /**
     * @var string
     */
    protected $conversationTopic = null;

    /**
     * @var \garethp\ews\API\Type\SingleRecipientType
     */
    protected $from = null;

    /**
     * @var string
     */
    protected $internetMessageId = null;

    /**
     * @var boolean
     */
    protected $isRead = null;

    /**
     * @var \DateTime
     */
    protected $postedTime = null;

    protected $_typeMap = array(
        'postedTime' => 'dateTime',
    );

    /**
     * @var string
     */
    protected $references = null;

    /**
     * @var \garethp\ews\API\Type\SingleRecipientType
     */
    protected $sender = null;

    /**
     * @return string
     */
    public function getConversationIndex()
    {
        return $this->conversationIndex;
    }

    /**
     * @return string
     */
    public function getConversationTopic()
    {
        return $this->conversationTopic;
    }

    /**
     * @return SingleRecipientType
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getInternetMessageId()
    {
        return $this->internetMessageId;
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
     * @return \DateTime
     */
    public function getPostedTime()
    {
        return $this->postedTime;
    }

    /**
     * @return string
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @return SingleRecipientType
     */
    public function getSender()
    {
        return $this->sender;
    }
}
