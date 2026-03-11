<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing HoldStatusType
 *
 *
 * XSD Type: HoldStatusType
 */
class HoldStatusType extends Enumeration
{

    const NOT_ON_HOLD = 'NotOnHold';

    const PENDING = 'Pending';

    const ON_HOLD = 'OnHold';

    const PARTIAL_HOLD = 'PartialHold';

    const FAILED = 'Failed';
}
