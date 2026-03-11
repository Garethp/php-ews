<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ConversationNodeSortOrderType
 *
 *
 * XSD Type: ConversationNodeSortOrder
 */
class ConversationNodeSortOrderType extends Enumeration
{

    const TREE_ORDER_ASCENDING = 'TreeOrderAscending';

    const TREE_ORDER_DESCENDING = 'TreeOrderDescending';

    const DATE_ORDER_ASCENDING = 'DateOrderAscending';

    const DATE_ORDER_DESCENDING = 'DateOrderDescending';
}
