<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing CalendarPermissionReadAccessType
 *
 *
 * XSD Type: CalendarPermissionReadAccessType
 */
class CalendarPermissionReadAccessType extends Enumeration
{

    const TIME_ONLY = 'TimeOnly';

    const TIME_SUBJECT_AND_LOCATION = 'TimeAndSubjectAndLocation';

    const FULL_DETAILS = 'FullDetails';

    const NONE = 'None';

    const TIME_AND_SUBJECT_AND_LOCATION = 'TimeAndSubjectAndLocation';
}
