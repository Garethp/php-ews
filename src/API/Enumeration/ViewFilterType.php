<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ViewFilterType
 *
 * Types of view filters for finding items/conversations
 * XSD Type: ViewFilterType
 */
class ViewFilterType extends Enumeration
{

    const ALL = 'All';

    const CLUTTER = 'Clutter';

    const FLAGGED = 'Flagged';

    const HAS_ATTACHMENT = 'HasAttachment';

    const NO_CLUTTER = 'NoClutter';

    const TASK_ACTIVE = 'TaskActive';

    const TASK_COMPLETED = 'TaskCompleted';

    const TASK_OVERDUE = 'TaskOverdue';

    const TO_OR_CC_ME = 'ToOrCcMe';

    const UNREAD = 'Unread';
}
