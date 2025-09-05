<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing TeamMailboxLifecycleStateType
 *
 *
 * XSD Type: TeamMailboxLifecycleStateType
 */
class TeamMailboxLifecycleStateType extends Enumeration
{

    const ACTIVE = 'Active';

    const CLOSED = 'Closed';

    const UNLINKED = 'Unlinked';

    const PENDING_DELETE = 'PendingDelete';
}
