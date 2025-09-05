<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing OnlineMeetingAccessLevelType
 *
 *
 * XSD Type: OnlineMeetingAccessLevelType
 */
class OnlineMeetingAccessLevelType extends Enumeration
{

    const LOCKED = 'Locked';

    const INVITED = 'Invited';

    const INTERNAL = 'Internal';

    const EVERYONE = 'Everyone';
}
