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
 * @method MessageType addToRecipients(EmailAddressType $toRecipients)
 * @method MessageType addCcRecipients(EmailAddressType $ccRecipients)
 * @method MessageType addBccRecipients(EmailAddressType $bccRecipients)
 * @method MessageType addReplyTo(EmailAddressType $replyTo)
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
     * @return boolean
     */
    public function getIsReadReceiptRequested()
    {
        return $this->isReadReceiptRequested;
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
     * @return boolean
     */
    public function getIsRead()
    {
        return $this->isRead;
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value SingleRecipientType
     * @return MessageType
     */
    public function setSender(SingleRecipientType $value)
    {
        $this->sender = $this->castValueIfNeeded("sender", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isReadReceiptRequested()
    {
        return ((bool) $this->isReadReceiptRequested);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MessageType
     */
    public function setIsReadReceiptRequested($value)
    {
        $this->isReadReceiptRequested = $this->castValueIfNeeded("isReadReceiptRequested", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isDeliveryReceiptRequested()
    {
        return ((bool) $this->isDeliveryReceiptRequested);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MessageType
     */
    public function setIsDeliveryReceiptRequested($value)
    {
        $this->isDeliveryReceiptRequested = $this->castValueIfNeeded("isDeliveryReceiptRequested", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MessageType
     */
    public function setConversationIndex($value)
    {
        $this->conversationIndex = $this->castValueIfNeeded("conversationIndex", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MessageType
     */
    public function setConversationTopic($value)
    {
        $this->conversationTopic = $this->castValueIfNeeded("conversationTopic", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MessageType
     */
    public function setInternetMessageId($value)
    {
        $this->internetMessageId = $this->castValueIfNeeded("internetMessageId", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isRead()
    {
        return ((bool) $this->isRead);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MessageType
     */
    public function setIsRead($value)
    {
        $this->isRead = $this->castValueIfNeeded("isRead", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isResponseRequested()
    {
        return ((bool) $this->isResponseRequested);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return MessageType
     */
    public function setIsResponseRequested($value)
    {
        $this->isResponseRequested = $this->castValueIfNeeded("isResponseRequested", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MessageType
     */
    public function setReferences($value)
    {
        $this->references = $this->castValueIfNeeded("references", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SingleRecipientType
     * @return MessageType
     */
    public function setReceivedBy(SingleRecipientType $value)
    {
        $this->receivedBy = $this->castValueIfNeeded("receivedBy", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SingleRecipientType
     * @return MessageType
     */
    public function setReceivedRepresenting(SingleRecipientType $value)
    {
        $this->receivedRepresenting = $this->castValueIfNeeded("receivedRepresenting", $value);
        return $this;
    }
}
