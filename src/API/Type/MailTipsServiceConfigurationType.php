<?php

namespace garethp\ews\API\Type;

/**
 * Class representing MailTipsServiceConfigurationType
 *
 *
 * XSD Type: MailTipsServiceConfiguration
 *
 * @method MailTipsServiceConfigurationType setMailTipsEnabled(boolean $mailTipsEnabled)
 * @method MailTipsServiceConfigurationType setMaxRecipientsPerGetMailTipsRequest(integer $maxRecipientsPerGetMailTipsRequest)
 * @method MailTipsServiceConfigurationType setMaxMessageSize(integer $maxMessageSize)
 * @method MailTipsServiceConfigurationType setLargeAudienceThreshold(integer $largeAudienceThreshold)
 * @method MailTipsServiceConfigurationType setShowExternalRecipientCount(boolean $showExternalRecipientCount)
 * @method MailTipsServiceConfigurationType addInternalDomains(SmtpDomainType $internalDomains)
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
        return ((bool) $this->mailTipsEnabled);
    }

    /**
     * @return boolean
     */
    public function getMailTipsEnabled()
    {
        return $this->mailTipsEnabled;
    }

    /**
     * @return integer
     */
    public function getMaxRecipientsPerGetMailTipsRequest()
    {
        return $this->maxRecipientsPerGetMailTipsRequest;
    }

    /**
     * @return integer
     */
    public function getMaxMessageSize()
    {
        return $this->maxMessageSize;
    }

    /**
     * @return integer
     */
    public function getLargeAudienceThreshold()
    {
        return $this->largeAudienceThreshold;
    }

    /**
     * @returns bool
     */
    public function isShowExternalRecipientCount()
    {
        return ((bool) $this->showExternalRecipientCount);
    }

    /**
     * @return boolean
     */
    public function getShowExternalRecipientCount()
    {
        return $this->showExternalRecipientCount;
    }

    /**
     * @return SmtpDomainType[]
     */
    public function getInternalDomains()
    {
        return $this->internalDomains;
    }
}
