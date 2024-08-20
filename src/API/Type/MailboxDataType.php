<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing MailboxDataType
 *
 *
 * XSD Type: MailboxData
 *
 * @method EmailAddressType getEmail()
 * @method MailboxDataType setEmail(EmailAddressType $email)
 * @method string getAttendeeType()
 * @method MailboxDataType setAttendeeType(string $attendeeType)
 * @method boolean getExcludeConflicts()
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
     * @returns bool
     */
    public function isExcludeConflicts()
    {
        return ((bool) $this->excludeConflicts);
    }
}
