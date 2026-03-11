<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing EmailReminderSendOptionType
 *
 *
 * XSD Type: EmailReminderSendOption
 */
class EmailReminderSendOptionType extends Enumeration
{

    const NOT_SET = 'NotSet';

    const USER = 'User';

    const ALL_ATTENDEES = 'AllAttendees';

    const STAFF = 'Staff';

    const CUSTOMER = 'Customer';
}
