<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing CalendarItemTypeType
 *
 *
 * XSD Type: CalendarItemTypeType
 */
class CalendarItemTypeType extends Enumeration
{

    const EXCEPTION = 'Exception';

    const OCCURRENCE = 'Occurrence';

    const RECURRING_MASTER = 'RecurringMaster';

    const SINGLE = 'Single';
}
