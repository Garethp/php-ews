<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing RetentionActionType
 *
 *
 * XSD Type: RetentionActionType
 */
class RetentionActionType extends Enumeration
{

    const NONE = 'None';

    const MOVE_TO_DELETED_ITEMS = 'MoveToDeletedItems';

    const MOVE_TO_FOLDER = 'MoveToFolder';

    const DELETE_AND_ALLOW_RECOVERY = 'DeleteAndAllowRecovery';

    const PERMANENTLY_DELETE = 'PermanentlyDelete';

    const MARK_AS_PAST_RETENTION_LIMIT = 'MarkAsPastRetentionLimit';

    const MOVE_TO_ARCHIVE = 'MoveToArchive';
}
