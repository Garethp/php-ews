<?php

namespace garethp\ews\API\Type;

use function garethp\ews\Utilities\ensureIsArray;
use function garethp\ews\Utilities\ensureIsMailbox;

/**
 * Class representing MessageType
 *
 *
 * XSD Type: MessageType
 *
 * @method MessageType setSender(SingleRecipientType $sender)
 * @method MessageType addToRecipients(EmailAddressType $toRecipients)
 * @method MessageType setToRecipients(array $toRecipients)
 * @method MessageType addCcRecipients(EmailAddressType $ccRecipients)
 * @method MessageType setCcRecipients(array $ccRecipients)
 * @method MessageType addBccRecipients(EmailAddressType $bccRecipients)
 * @method MessageType setBccRecipients(array $bccRecipients)
 * @method MessageType setIsReadReceiptRequested(boolean $isReadReceiptRequested)
 * @method MessageType setIsDeliveryReceiptRequested(boolean $isDeliveryReceiptRequested)
 * @method MessageType setConversationIndex(string $conversationIndex)
 * @method MessageType setConversationTopic(string $conversationTopic)
 * @method MessageType setFrom(SingleRecipientType $from)
 * @method MessageType setInternetMessageId(string $internetMessageId)
 * @method MessageType setIsRead(boolean $isRead)
 * @method MessageType setIsResponseRequested(boolean $isResponseRequested)
 * @method MessageType setReferences(string $references)
 * @method MessageType addReplyTo(EmailAddressType $replyTo)
 * @method MessageType setReplyTo(array $replyTo)
 * @method MessageType setReceivedBy(SingleRecipientType $receivedBy)
 * @method MessageType setReceivedRepresenting(SingleRecipientType $receivedRepresenting)
 */
class MessageType extends ItemType
{

    /**
     * @var \garethp\ews\API\Type\SingleRecipientType
     */
    protected $sender = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $toRecipients = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $ccRecipients = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $bccRecipients = null;

    /**
     * @var boolean
     */
    protected $isReadReceiptRequested = null;

    /**
     * @var boolean
     */
    protected $isDeliveryReceiptRequested = null;

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
     * @var boolean
     */
    protected $isResponseRequested = null;

    /**
     * @var string
     */
    protected $references = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $replyTo = null;

    /**
     * @var \garethp\ews\API\Type\SingleRecipientType
     */
    protected $receivedBy = null;

    /**
     * @var \garethp\ews\API\Type\SingleRecipientType
     */
    protected $receivedRepresenting = null;

    /**
     * @return bool
     */
    public function isAReply()
    {
        return ($this->exists('inReplyTo') && $this->getInReplyTo() !== null);
    }

    /**
     * @param BodyType|string $body
     * @return MessageType
     */
    public function setBody($body)
    {
        if (is_string($body)) {
            $body = new BodyType($body);
        }

        return parent::setBody($body);
    }

    /**
     * @param Mailbox|string $from
     * @return MessageType
     */
    public function setFrom($from)
    {
        return parent::setFrom(new SingleRecipientType(ensureIsMailbox($from)));
    }

    public function addToRecipients($recipient)
    {
        return parent::addToRecipients(ensureIsMailbox($recipient));
    }

    public function addCcRecipients($recipient)
    {
        return parent::addCcRecipients(ensureIsMailbox($recipient));
    }

    public function addBccRecipients($recipient)
    {
        return parent::addBccRecipients(ensureIsMailbox($recipient));
    }

    public function addReplyTo($recipient)
    {
        return parent::addReplyTo(ensureIsMailbox($recipient));
    }

    public function setToRecipients($recipients)
    {
        $this->toRecipients = [ ];
        $recipients = ensureIsArray($recipients);

        foreach ($recipients as $recipient) {
            $this->addToRecipients($recipient);
        }

        return $this;
    }

    public function setCcRecipients($recipients)
    {
        $this->ccRecipients = [ ];
        $recipients = ensureIsArray($recipients);

        foreach ($recipients as $recipient) {
            $this->addCcRecipients($recipient);
        }

        return $this;
    }

    public function setBccRecipients($recipients)
    {
        $this->bccRecipients = [ ];
        $recipients = ensureIsArray($recipients);

        foreach ($recipients as $recipient) {
            $this->addBccRecipients($recipient);
        }

        return $this;
    }

    public function setReplyTo($recipients)
    {
        $this->replyTo = [];
        $recipients = ensureIsArray($recipients);

        foreach ($recipients as $recipient) {
            $this->addReplyTo($recipient);
        }

        return $this;
    }

    /**
     * @return SingleRecipientType
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getToRecipients()
    {
        return $this->toRecipients;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getCcRecipients()
    {
        return $this->ccRecipients;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getBccRecipients()
    {
        return $this->bccRecipients;
    }

    /**
     * @returns bool
     */
    public function isReadReceiptRequested()
    {
        return ((bool) $this->isReadReceiptRequested);
    }

    /**
     * @return boolean
     */
    public function getIsReadReceiptRequested()
    {
        return $this->isReadReceiptRequested;
    }

    /**
     * @returns bool
     */
    public function isDeliveryReceiptRequested()
    {
        return ((bool) $this->isDeliveryReceiptRequested);
    }

    /**
     * @return boolean
     */
    public function getIsDeliveryReceiptRequested()
    {
        return $this->isDeliveryReceiptRequested;
    }

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
     * @returns bool
     */
    public function isResponseRequested()
    {
        return ((bool) $this->isResponseRequested);
    }

    /**
     * @return boolean
     */
    public function getIsResponseRequested()
    {
        return $this->isResponseRequested;
    }

    /**
     * @return string
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * @return SingleRecipientType
     */
    public function getReceivedBy()
    {
        return $this->receivedBy;
    }

    /**
     * @return SingleRecipientType
     */
    public function getReceivedRepresenting()
    {
        return $this->receivedRepresenting;
    }
}
