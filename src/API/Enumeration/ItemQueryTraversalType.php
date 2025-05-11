<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ItemQueryTraversalType
 *
 * Types of sub-tree traversal for deletion and enumeration
 * XSD Type: ItemQueryTraversalType
 */
class ItemQueryTraversalType extends Enumeration
{

    const ASSOCIATED = 'Associated';

    const SHALLOW = 'Shallow';

    const SOFT_DELETED = 'SoftDeleted';
}
