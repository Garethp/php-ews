<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FindMessageTrackingSearchResultType
 *
 *
 * XSD Type: FindMessageTrackingSearchResultType
 *
 * @method FindMessageTrackingSearchResultType setSubject(string $subject)
 * @method FindMessageTrackingSearchResultType setSender(EmailAddressType $sender)
 * @method FindMessageTrackingSearchResultType setPurportedSender(EmailAddressType $purportedSender)
 * @method FindMessageTrackingSearchResultType addRecipients(EmailAddressType $recipients)
 * @method FindMessageTrackingSearchResultType setRecipients(array $recipients)
 * @method FindMessageTrackingSearchResultType setSubmittedTime(\DateTime $submittedTime)
 * @method FindMessageTrackingSearchResultType setMessageTrackingReportId(string $messageTrackingReportId)
 * @method FindMessageTrackingSearchResultType setPreviousHopServer(string $previousHopServer)
 * @method FindMessageTrackingSearchResultType setFirstHopServer(string $firstHopServer)
 * @method FindMessageTrackingSearchResultType addProperties(TrackingPropertyType $properties)
 * @method FindMessageTrackingSearchResultType setProperties(array $properties)
 */
class FindMessageTrackingSearchResultType extends Type
{

    /**
     * @var string
     */
    protected $subject = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $sender = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $purportedSender = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $recipients = null;

    /**
     * @var \DateTime
     */
    protected $submittedTime = null;

    protected $_typeMap = array(
        'submittedTime' => 'dateTime',
    );

    /**
     * @var string
     */
    protected $messageTrackingReportId = null;

    /**
     * @var string
     */
    protected $previousHopServer = null;

    /**
     * @var string
     */
    protected $firstHopServer = null;

    /**
     * @var \garethp\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return EmailAddressType
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @return EmailAddressType
     */
    public function getPurportedSender()
    {
        return $this->purportedSender;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @return \DateTime
     */
    public function getSubmittedTime()
    {
        return $this->submittedTime;
    }

    /**
     * @return string
     */
    public function getMessageTrackingReportId()
    {
        return $this->messageTrackingReportId;
    }

    /**
     * @return string
     */
    public function getPreviousHopServer()
    {
        return $this->previousHopServer;
    }

    /**
     * @return string
     */
    public function getFirstHopServer()
    {
        return $this->firstHopServer;
    }

    /**
     * @return TrackingPropertyType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }
}
