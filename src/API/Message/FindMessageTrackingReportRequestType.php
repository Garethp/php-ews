<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindMessageTrackingReportRequestType
 *
 *
 * XSD Type: FindMessageTrackingReportRequestType
 *
 * @method FindMessageTrackingReportRequestType setScope(string $scope)
 * @method FindMessageTrackingReportRequestType setDomain(string $domain)
 * @method FindMessageTrackingReportRequestType setSender(\garethp\ews\API\Type\EmailAddressType $sender)
 * @method FindMessageTrackingReportRequestType setPurportedSender(\garethp\ews\API\Type\EmailAddressType $purportedSender)
 * @method FindMessageTrackingReportRequestType setRecipient(\garethp\ews\API\Type\EmailAddressType $recipient)
 * @method FindMessageTrackingReportRequestType setSubject(string $subject)
 * @method FindMessageTrackingReportRequestType setStartDateTime(\DateTime $startDateTime)
 * @method FindMessageTrackingReportRequestType setEndDateTime(\DateTime $endDateTime)
 * @method FindMessageTrackingReportRequestType setMessageId(string $messageId)
 * @method FindMessageTrackingReportRequestType setFederatedDeliveryMailbox(\garethp\ews\API\Type\EmailAddressType $federatedDeliveryMailbox)
 * @method FindMessageTrackingReportRequestType setDiagnosticsLevel(string $diagnosticsLevel)
 * @method FindMessageTrackingReportRequestType setServerHint(string $serverHint)
 * @method FindMessageTrackingReportRequestType addProperties(\garethp\ews\API\Type\TrackingPropertyType $properties)
 * @method FindMessageTrackingReportRequestType setProperties(array $properties)
 */
class FindMessageTrackingReportRequestType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $scope = null;

    /**
     * @var string
     */
    protected $domain = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $sender = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $purportedSender = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $recipient = null;

    /**
     * @var string
     */
    protected $subject = null;

    /**
     * @var \DateTime
     */
    protected $startDateTime = null;

    protected $_typeMap = array(
        'startDateTime' => 'dateTime',
        'endDateTime' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $endDateTime = null;

    /**
     * @var string
     */
    protected $messageId = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $federatedDeliveryMailbox = null;

    /**
     * @var string
     */
    protected $diagnosticsLevel = null;

    /**
     * @var string
     */
    protected $serverHint = null;

    /**
     * @var \garethp\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getPurportedSender()
    {
        return $this->purportedSender;
    }

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getFederatedDeliveryMailbox()
    {
        return $this->federatedDeliveryMailbox;
    }

    /**
     * @return string
     */
    public function getDiagnosticsLevel()
    {
        return $this->diagnosticsLevel;
    }

    /**
     * @return string
     */
    public function getServerHint()
    {
        return $this->serverHint;
    }

    /**
     * @return \garethp\ews\API\Type\TrackingPropertyType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }
}
