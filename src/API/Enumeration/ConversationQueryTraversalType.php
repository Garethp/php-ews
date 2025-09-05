<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ConversationQueryTraversalType
 *
 * Types of sub-tree traversal for conversations
 * XSD Type: ConversationQueryTraversalType
 */
class ConversationQueryTraversalType extends Enumeration
{

    const DEEP = 'Deep';

    const SHALLOW = 'Shallow';
}
