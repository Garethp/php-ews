<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetUserOofSettingsRequestType
 *
 *
 * XSD Type: GetUserOofSettingsRequest
 *
 * @method GetUserOofSettingsRequestType setMailbox(\garethp\ews\API\Type\EmailAddressType $mailbox)
 */
class GetUserOofSettingsRequestType extends BaseRequestType
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
}
