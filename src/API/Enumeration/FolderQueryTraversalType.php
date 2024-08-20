<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing FolderQueryTraversalType
 *
 * Types of sub-tree traversal for deletion and enumeration
 * XSD Type: FolderQueryTraversalType
 */
class FolderQueryTraversalType extends Enumeration
{

    const DEEP = 'Deep';

    const SHALLOW = 'Shallow';

    const SOFT_DELETED = 'SoftDeleted';
}
