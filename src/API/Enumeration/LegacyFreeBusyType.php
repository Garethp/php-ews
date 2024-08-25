<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing LegacyFreeBusyType
 *
 *
 * XSD Type: LegacyFreeBusyType
 */
class LegacyFreeBusyType extends Enumeration
{

    const BUSY = 'Busy';

    const FREE = 'Free';

    const NO_DATA = 'NoData';

    const OUT_OF_OFFICE = 'OOF';

    const TENTATIVE = 'Tentative';

    const WORKING_ELSEWHERE = 'WorkingElsewhere';

    const OOF = 'OOF';
}
