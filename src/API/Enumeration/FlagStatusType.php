<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing FlagStatusType
 *
 *
 * XSD Type: FlagStatusType
 */
class FlagStatusType extends Enumeration
{

    const COMPLETE = 'Complete';

    const FLAGGED = 'Flagged';

    const NOT_FLAGGED = 'NotFlagged';
}
