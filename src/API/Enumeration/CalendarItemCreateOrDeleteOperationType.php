<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing CalendarItemCreateOrDeleteOperationType
 *
 *
 * XSD Type: CalendarItemCreateOrDeleteOperationType
 */
class CalendarItemCreateOrDeleteOperationType extends Enumeration
{

    const SEND_ONLY_TO_ALL = 'SendOnlyToAll';

    const SEND_TO_ALL_AND_SAVE_COPY = 'SendToAllAndSaveCopy';

    const SEND_TO_NONE = 'SendToNone';
}
