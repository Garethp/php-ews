<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SetUserOofSettingsRequestType
 *
 *
 * XSD Type: SetUserOofSettingsRequest
 *
 * @method SetUserOofSettingsRequestType setMailbox(\garethp\ews\API\Type\EmailAddressType $mailbox)
 * @method SetUserOofSettingsRequestType setUserOofSettings(\garethp\ews\API\Type\UserOofSettings $userOofSettings)
 */
class SetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var \garethp\ews\API\Type\UserOofSettings
     */
    protected $userOofSettings = null;

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * @return \garethp\ews\API\Type\UserOofSettings
     */
    public function getUserOofSettings()
    {
        return $this->userOofSettings;
    }
}
