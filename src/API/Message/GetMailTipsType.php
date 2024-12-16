<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetMailTipsType
 *
 *
 * XSD Type: GetMailTipsType
 */
class GetMailTipsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $sendingAs = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $recipients = null;

    /**
     * @var string[]
     */
    protected $mailTipsRequested = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getSendingAs()
    {
        return $this->sendingAs;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\EmailAddressType
     * @return GetMailTipsType
     */
    public function setSendingAs(\garethp\ews\API\Type\EmailAddressType $value)
    {
        $this->sendingAs = $this->castValueIfNeeded("sendingAs", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\EmailAddressType
     * @return GetMailTipsType
     */
    public function addRecipients(\garethp\ews\API\Type\EmailAddressType $value)
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
     * @return \garethp\ews\API\Type\EmailAddressType[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\EmailAddressType[]
     * @return GetMailTipsType
     */
    public function setRecipients(array $value)
    {
        $this->recipients = $this->castValueIfNeeded("recipients", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return GetMailTipsType
     */
    public function addMailTipsRequested($value)
    {
        $value = $this->castValueIfNeeded("mailTipsRequested", $value);

        if ($this->mailTipsRequested === null) {
            $this->mailTipsRequested = array();
        }

        if (!is_array($this->mailTipsRequested)) {
            $this->mailTipsRequested = array($this->mailTipsRequested);
        }

        $this->mailTipsRequested[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getMailTipsRequested()
    {
        return $this->mailTipsRequested;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return GetMailTipsType
     */
    public function setMailTipsRequested(array $value)
    {
        $this->mailTipsRequested = $this->castValueIfNeeded("mailTipsRequested", $value);
        return $this;
    }
}
