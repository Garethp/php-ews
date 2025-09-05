<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing EmailReminderChangeType
 *
 *
 * XSD Type: EmailReminderChangeType
 */
class EmailReminderChangeType extends Enumeration
{

    const NONE = 'None';

    const ADDED = 'Added';

    const OVERRIDE = 'Override';

    const DELETED = 'Deleted';
}
