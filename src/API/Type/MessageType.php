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
 * @method SingleRecipientType getSender()
 * @method MessageType setSender(SingleRecipientType $sender)
 * @method MessageType addToRecipients(EmailAddressType $toRecipients)
 * @method EmailAddressType[] getToRecipients()
 * @method MessageType setToRecipients(array $toRecipients)
 * @method MessageType addCcRecipients(EmailAddressType $ccRecipients)
 * @method EmailAddressType[] getCcRecipients()
 * @method MessageType setCcRecipients(array $ccRecipients)
 * @method MessageType addBccRecipients(EmailAddressType $bccRecipients)
 * @method EmailAddressType[] getBccRecipients()
 * @method MessageType setBccRecipients(array $bccRecipients)
 * @method boolean getIsReadReceiptRequested()
 * @method MessageType setIsReadReceiptRequested(boolean $isReadReceiptRequested)
 * @method boolean getIsDeliveryReceiptRequested()
 * @method MessageType setIsDeliveryReceiptRequested(boolean $isDeliveryReceiptRequested)
 * @method string getConversationIndex()
 * @method MessageType setConversationIndex(string $conversationIndex)
 * @method string getConversationTopic()
 * @method MessageType setConversationTopic(string $conversationTopic)
 * @method SingleRecipientType getFrom()
 * @method MessageType setFrom(SingleRecipientType $from)
 * @method string getInternetMessageId()
 * @method MessageType setInternetMessageId(string $internetMessageId)
 * @method boolean getIsRead()
 * @method MessageType setIsRead(boolean $isRead)
 * @method boolean getIsResponseRequested()
 * @method MessageType setIsResponseRequested(boolean $isResponseRequested)
 * @method string getReferences()
 * @method MessageType setReferences(string $references)
 * @method MessageType addReplyTo(EmailAddressType $replyTo)
 * @method EmailAddressType[] getReplyTo()
 * @method MessageType setReplyTo(array $replyTo)
 * @method SingleRecipientType getReceivedBy()
 * @method MessageType setReceivedBy(SingleRecipientType $receivedBy)
 * @method SingleRecipientType getReceivedRepresenting()
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
     * @returns bool
     */
    public function isReadReceiptRequested()
    {
        return $this->isReadReceiptRequested && $this->isReadReceiptRequested;
    }

    /**
     * @returns bool
     */
    public function isDeliveryReceiptRequested()
    {
        return $this->isDeliveryReceiptRequested && $this->isDeliveryReceiptRequested;
    }

    /**
     * @returns bool
     */
    public function isRead()
    {
        return $this->isRead && $this->isRead;
    }

    /**
     * @returns bool
     */
    public function isResponseRequested()
    {
        return $this->isResponseRequested && $this->isResponseRequested;
    }
}
