<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing EntityFeedbackEntityAddSourceType
 *
 *
 * XSD Type: EntityFeedbackEntityAddSourceType
 */
class EntityFeedbackEntityAddSourceType extends Enumeration
{

    const NONE = 'None';

    const ENTITY_RELEVANCE_API = 'EntityRelevanceApi';

    const ENTITY_RELEVANCE_API_CACHE = 'EntityRelevanceApiCache';

    const ACTIVE_DIRECTORY = 'ActiveDirectory';

    const EXPLICIT_TYPING = 'ExplicitTyping';

    const PASTE = 'Paste';

    const LOCAL_CACHE_AND_ENTITY_RELEVANCE_API = 'LocalCacheAndEntityRelevanceApi';

    const LOCAL_CACHE = 'LocalCache';

    const OTHER = 'Other';
}
