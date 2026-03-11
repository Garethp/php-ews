<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing AvailabilityStatusType
 *
 *
 * XSD Type: AvailabilityStatusType
 */
class AvailabilityStatusType extends Enumeration
{

    const UNKNOWN = 'Unknown';

    const FREE = 'Free';

    const TENTATIVE = 'Tentative';

    const BUSY = 'Busy';

    const OOF = 'Oof';

    const WORKING_ELSEWHERE = 'WorkingElsewhere';
}
