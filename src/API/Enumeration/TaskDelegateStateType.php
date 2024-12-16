<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing TaskDelegateStateType
 *
 *
 * XSD Type: TaskDelegateStateType
 */
class TaskDelegateStateType extends Enumeration
{

    const ACCEPTED = 'Accepted';

    const DECLINED = 'Declined';

    const MAX = 'Max';

    const NO_MATCH = 'NoMatch';

    const OWN_NEW = 'OwnNew';

    const OWNED = 'Owned';
}
