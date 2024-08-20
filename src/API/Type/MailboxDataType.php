<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing MailboxDataType
 *
 *
 * XSD Type: MailboxData
 *
 * @method MailboxDataType setEmail(EmailAddressType $email)
 * @method MailboxDataType setAttendeeType(string $attendeeType)
 * @method MailboxDataType setExcludeConflicts(boolean $excludeConflicts)
 */
class MailboxDataType extends Type
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $email = null;

    /**
     * @var string
     */
    protected $attendeeType = null;

    /**
     * @var boolean
     */
    protected $excludeConflicts = null;

    /**
     * @return EmailAddressType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getAttendeeType()
    {
        return $this->attendeeType;
    }

    /**
     * @returns bool
     */
    public function isExcludeConflicts()
    {
        return ((bool) $this->excludeConflicts);
    }

    /**
     * @return boolean
     */
    public function getExcludeConflicts()
    {
        return $this->excludeConflicts;
    }
}
