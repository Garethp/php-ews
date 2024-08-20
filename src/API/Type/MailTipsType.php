<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing MailTipsType
 *
 *
 * XSD Type: MailTips
 *
 * @method MailTipsType setRecipientAddress(EmailAddressType $recipientAddress)
 * @method MailTipsType addPendingMailTips(string $pendingMailTips)
 * @method MailTipsType setPendingMailTips(array $pendingMailTips)
 * @method MailTipsType setOutOfOffice(OutOfOfficeMailTipType $outOfOffice)
 * @method MailTipsType setMailboxFull(boolean $mailboxFull)
 * @method MailTipsType setCustomMailTip(string $customMailTip)
 * @method MailTipsType setTotalMemberCount(integer $totalMemberCount)
 * @method MailTipsType setExternalMemberCount(integer $externalMemberCount)
 * @method MailTipsType setMaxMessageSize(integer $maxMessageSize)
 * @method MailTipsType setDeliveryRestricted(boolean $deliveryRestricted)
 * @method MailTipsType setIsModerated(boolean $isModerated)
 * @method MailTipsType setInvalidRecipient(boolean $invalidRecipient)
 */
class MailTipsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $recipientAddress = null;

    /**
     * @var string[]
     */
    protected $pendingMailTips = null;

    /**
     * @var \garethp\ews\API\Type\OutOfOfficeMailTipType
     */
    protected $outOfOffice = null;

    /**
     * @var boolean
     */
    protected $mailboxFull = null;

    /**
     * @var string
     */
    protected $customMailTip = null;

    /**
     * @var integer
     */
    protected $totalMemberCount = null;

    /**
     * @var integer
     */
    protected $externalMemberCount = null;

    /**
     * @var integer
     */
    protected $maxMessageSize = null;

    /**
     * @var boolean
     */
    protected $deliveryRestricted = null;

    /**
     * @var boolean
     */
    protected $isModerated = null;

    /**
     * @var boolean
     */
    protected $invalidRecipient = null;

    /**
     * @return EmailAddressType
     */
    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }

    /**
     * @return string[]
     */
    public function getPendingMailTips()
    {
        return $this->pendingMailTips;
    }

    /**
     * @return OutOfOfficeMailTipType
     */
    public function getOutOfOffice()
    {
        return $this->outOfOffice;
    }

    /**
     * @returns bool
     */
    public function isMailboxFull()
    {
        return ((bool) $this->mailboxFull);
    }

    /**
     * @return boolean
     */
    public function getMailboxFull()
    {
        return $this->mailboxFull;
    }

    /**
     * @return string
     */
    public function getCustomMailTip()
    {
        return $this->customMailTip;
    }

    /**
     * @return integer
     */
    public function getTotalMemberCount()
    {
        return $this->totalMemberCount;
    }

    /**
     * @return integer
     */
    public function getExternalMemberCount()
    {
        return $this->externalMemberCount;
    }

    /**
     * @return integer
     */
    public function getMaxMessageSize()
    {
        return $this->maxMessageSize;
    }

    /**
     * @returns bool
     */
    public function isDeliveryRestricted()
    {
        return ((bool) $this->deliveryRestricted);
    }

    /**
     * @return boolean
     */
    public function getDeliveryRestricted()
    {
        return $this->deliveryRestricted;
    }

    /**
     * @returns bool
     */
    public function isModerated()
    {
        return ((bool) $this->isModerated);
    }

    /**
     * @return boolean
     */
    public function getIsModerated()
    {
        return $this->isModerated;
    }

    /**
     * @returns bool
     */
    public function isInvalidRecipient()
    {
        return ((bool) $this->invalidRecipient);
    }

    /**
     * @return boolean
     */
    public function getInvalidRecipient()
    {
        return $this->invalidRecipient;
    }
}
