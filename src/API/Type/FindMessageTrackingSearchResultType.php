<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FindMessageTrackingSearchResultType
 *
 *
 * XSD Type: FindMessageTrackingSearchResultType
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
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return FindMessageTrackingSearchResultType
     */
    public function setSubject($value)
    {
        $this->subject = $this->castValueIfNeeded("subject", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EmailAddressType
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType
     * @return FindMessageTrackingSearchResultType
     */
    public function setSender(EmailAddressType $value)
    {
        $this->sender = $this->castValueIfNeeded("sender", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EmailAddressType
     */
    public function getPurportedSender()
    {
        return $this->purportedSender;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType
     * @return FindMessageTrackingSearchResultType
     */
    public function setPurportedSender(EmailAddressType $value)
    {
        $this->purportedSender = $this->castValueIfNeeded("purportedSender", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType
     * @return FindMessageTrackingSearchResultType
     */
    public function addRecipients(EmailAddressType $value)
    {
        $value = $this->castValueIfNeeded("recipients", $value);

        if ($this->recipients === null) {
            $this->recipients = array();
        }

        if (!is_array($this->recipients)) {
            $this->recipients = array($this->recipients);
        }

        $this->recipients[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EmailAddressType[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType[]
     * @return FindMessageTrackingSearchResultType
     */
    public function setRecipients(array $value)
    {
        $this->recipients = $this->castValueIfNeeded("recipients", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getSubmittedTime()
    {
        return $this->submittedTime;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return FindMessageTrackingSearchResultType
     */
    public function setSubmittedTime(\DateTime|string $value)
    {
        $this->submittedTime = $this->castValueIfNeeded("submittedTime", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMessageTrackingReportId()
    {
        return $this->messageTrackingReportId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return FindMessageTrackingSearchResultType
     */
    public function setMessageTrackingReportId($value)
    {
        $this->messageTrackingReportId = $this->castValueIfNeeded("messageTrackingReportId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPreviousHopServer()
    {
        return $this->previousHopServer;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return FindMessageTrackingSearchResultType
     */
    public function setPreviousHopServer($value)
    {
        $this->previousHopServer = $this->castValueIfNeeded("previousHopServer", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getFirstHopServer()
    {
        return $this->firstHopServer;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return FindMessageTrackingSearchResultType
     */
    public function setFirstHopServer($value)
    {
        $this->firstHopServer = $this->castValueIfNeeded("firstHopServer", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TrackingPropertyType
     * @return FindMessageTrackingSearchResultType
     */
    public function addProperties(TrackingPropertyType $value)
    {
        $value = $this->castValueIfNeeded("properties", $value);

        if ($this->properties === null) {
            $this->properties = array();
        }

        if (!is_array($this->properties)) {
            $this->properties = array($this->properties);
        }

        $this->properties[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return TrackingPropertyType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TrackingPropertyType[]
     * @return FindMessageTrackingSearchResultType
     */
    public function setProperties(array $value)
    {
        $this->properties = $this->castValueIfNeeded("properties", $value);
        return $this;
    }
}
