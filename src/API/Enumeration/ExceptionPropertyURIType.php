<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ExceptionPropertyURIType
 *
 *
 * XSD Type: ExceptionPropertyURIType
 */
class ExceptionPropertyURIType extends Enumeration
{

    const ATTACHMENT_CONTENT = 'attachment:Content';

    const ATTACHMENT_CONTENT_TYPE = 'attachment:ContentType';

    const ATTACHMENT_NAME = 'attachment:Name';

    const RECURRENCE_DAY_OF_MONTH = 'recurrence:DayOfMonth';

    const RECURRENCE_DAY_OF_WEEK_INDEX = 'recurrence:DayOfWeekIndex';

    const RECURRENCE_DAYS_OF_WEEK = 'recurrence:DaysOfWeek';

    const RECURRENCE_INTERVAL = 'recurrence:Interval';

    const RECURRENCE_MONTH = 'recurrence:Month';

    const RECURRENCE_NUMBER_OF_OCCURRENCES = 'recurrence:NumberOfOccurrences';

    const TIMEZONE_OFFSET = 'timezone:Offset';
}
