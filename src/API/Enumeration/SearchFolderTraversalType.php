<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing SearchFolderTraversalType
 *
 * Types of sub-tree traversal for deletion and enumeration
 * XSD Type: SearchFolderTraversalType
 */
class SearchFolderTraversalType extends Enumeration
{

    const DEEP = 'Deep';

    const SHALLOW = 'Shallow';
}
