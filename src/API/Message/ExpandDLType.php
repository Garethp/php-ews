<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ExpandDLType
 *
 *
 * XSD Type: ExpandDLType
 */
class ExpandDLType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\EmailAddressType
     * @return ExpandDLType
     */
    public function setMailbox(\garethp\ews\API\Type\EmailAddressType $value)
    {
        $this->mailbox = $this->castValueIfNeeded("mailbox", $value);
        return $this;
    }
}
