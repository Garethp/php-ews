<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing MessageTrackingReportType
 *
 *
 * XSD Type: MessageTrackingReportType
 *
 * @method MessageTrackingReportType setSender(EmailAddressType $sender)
 * @method MessageTrackingReportType setPurportedSender(EmailAddressType $purportedSender)
 * @method MessageTrackingReportType setSubject(string $subject)
 * @method MessageTrackingReportType setSubmitTime(\DateTime $submitTime)
 * @method MessageTrackingReportType addOriginalRecipients(EmailAddressType $originalRecipients)
 * @method MessageTrackingReportType setOriginalRecipients(array $originalRecipients)
 * @method MessageTrackingReportType addRecipientTrackingEvents(RecipientTrackingEventType $recipientTrackingEvents)
 * @method MessageTrackingReportType setRecipientTrackingEvents(array $recipientTrackingEvents)
 * @method MessageTrackingReportType addProperties(TrackingPropertyType $properties)
 * @method MessageTrackingReportType setProperties(array $properties)
 */
class MessageTrackingReportType extends Type
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $sender = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $purportedSender = null;

    /**
     * @var string
     */
    protected $subject = null;

    /**
     * @var \DateTime
     */
    protected $submitTime = null;

    protected $_typeMap = array(
        'submitTime' => 'dateTime',
    );

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $originalRecipients = null;

    /**
     * @var \garethp\ews\API\Type\RecipientTrackingEventType[]
     */
    protected $recipientTrackingEvents = null;

    /**
     * @var \garethp\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;

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
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return \DateTime
     */
    public function getSubmitTime()
    {
        return $this->submitTime;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getOriginalRecipients()
    {
        return $this->originalRecipients;
    }

    /**
     * @return RecipientTrackingEventType[]
     */
    public function getRecipientTrackingEvents()
    {
        return $this->recipientTrackingEvents;
    }

    /**
     * @return TrackingPropertyType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }
}
