<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing TaskStatusType
 *
 *
 * XSD Type: TaskStatusType
 */
class TaskStatusType extends Enumeration
{

    const COMPLETED = 'Completed';

    const DEFERRED = 'Deferred';

    const IN_PROGRESS = 'InProgress';

    const NOT_STARTED = 'NotStarted';

    const WAITING_ON_OTHERS = 'WaitingOnOthers';
}
