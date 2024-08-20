<?php

namespace garethp\ews\API\Type;

/**
 * Class representing MailTipsServiceConfigurationType
 *
 *
 * XSD Type: MailTipsServiceConfiguration
 *
 * @method boolean getMailTipsEnabled()
 * @method MailTipsServiceConfigurationType setMailTipsEnabled(boolean $mailTipsEnabled)
 * @method integer getMaxRecipientsPerGetMailTipsRequest()
 * @method MailTipsServiceConfigurationType setMaxRecipientsPerGetMailTipsRequest(integer $maxRecipientsPerGetMailTipsRequest)
 * @method integer getMaxMessageSize()
 * @method MailTipsServiceConfigurationType setMaxMessageSize(integer $maxMessageSize)
 * @method integer getLargeAudienceThreshold()
 * @method MailTipsServiceConfigurationType setLargeAudienceThreshold(integer $largeAudienceThreshold)
 * @method boolean getShowExternalRecipientCount()
 * @method MailTipsServiceConfigurationType setShowExternalRecipientCount(boolean $showExternalRecipientCount)
 * @method MailTipsServiceConfigurationType addInternalDomains(SmtpDomainType $internalDomains)
 * @method SmtpDomainType[] getInternalDomains()
 * @method MailTipsServiceConfigurationType setInternalDomains(array $internalDomains)
 */
class MailTipsServiceConfigurationType extends ServiceConfigurationType
{

    /**
     * @var boolean
     */
    protected $mailTipsEnabled = null;

    /**
     * @var integer
     */
    protected $maxRecipientsPerGetMailTipsRequest = null;

    /**
     * @var integer
     */
    protected $maxMessageSize = null;

    /**
     * @var integer
     */
    protected $largeAudienceThreshold = null;

    /**
     * @var boolean
     */
    protected $showExternalRecipientCount = null;

    /**
     * @var \garethp\ews\API\Type\SmtpDomainType[]
     */
    protected $internalDomains = null;

    /**
     * @returns bool
     */
    public function isMailTipsEnabled()
    {
        return $this->mailTipsEnabled && $this->mailTipsEnabled;
    }

    /**
     * @returns bool
     */
    public function isShowExternalRecipientCount()
    {
        return $this->showExternalRecipientCount && $this->showExternalRecipientCount;
    }
}
