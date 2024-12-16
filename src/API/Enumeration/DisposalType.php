<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing DisposalType
 *
 *
 * XSD Type: DisposalType
 */
class DisposalType extends Enumeration
{

    const HARD_DELETE = 'HardDelete';

    const MOVE_TO_DELETED_ITEMS = 'MoveToDeletedItems';

    const SOFT_DELETE = 'SoftDelete';
}
