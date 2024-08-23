<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing MailTipsType
 *
 *
 * XSD Type: MailTips
 *
 * @method EmailAddressType getRecipientAddress()
 * @method MailTipsType setRecipientAddress(EmailAddressType $recipientAddress)
 * @method MailTipsType addPendingMailTips(string $pendingMailTips)
 * @method string[] getPendingMailTips()
 * @method MailTipsType setPendingMailTips(array $pendingMailTips)
 * @method OutOfOfficeMailTipType getOutOfOffice()
 * @method MailTipsType setOutOfOffice(OutOfOfficeMailTipType $outOfOffice)
 * @method boolean getMailboxFull()
 * @method MailTipsType setMailboxFull(boolean $mailboxFull)
 * @method string getCustomMailTip()
 * @method MailTipsType setCustomMailTip(string $customMailTip)
 * @method integer getTotalMemberCount()
 * @method MailTipsType setTotalMemberCount(integer $totalMemberCount)
 * @method integer getExternalMemberCount()
 * @method MailTipsType setExternalMemberCount(integer $externalMemberCount)
 * @method integer getMaxMessageSize()
 * @method MailTipsType setMaxMessageSize(integer $maxMessageSize)
 * @method boolean getDeliveryRestricted()
 * @method MailTipsType setDeliveryRestricted(boolean $deliveryRestricted)
 * @method boolean getIsModerated()
 * @method MailTipsType setIsModerated(boolean $isModerated)
 * @method boolean getInvalidRecipient()
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
     * @returns bool
     */
    public function isMailboxFull()
    {
        return $this->mailboxFull && $this->mailboxFull;
    }

    /**
     * @returns bool
     */
    public function isDeliveryRestricted()
    {
        return $this->deliveryRestricted && $this->deliveryRestricted;
    }

    /**
     * @returns bool
     */
    public function isModerated()
    {
        return $this->isModerated && $this->isModerated;
    }

    /**
     * @returns bool
     */
    public function isInvalidRecipient()
    {
        return $this->invalidRecipient && $this->invalidRecipient;
    }
}
