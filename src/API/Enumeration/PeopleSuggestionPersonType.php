<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing PeopleSuggestionPersonType
 *
 *
 * XSD Type: PeopleSuggestionPersonType
 */
class PeopleSuggestionPersonType extends Enumeration
{

    const UNKNOWN = 'Unknown';

    const PERSON = 'Person';

    const DISTRIBUTION_LIST = 'DistributionList';

    const ROOM = 'Room';

    const PLACE = 'Place';

    const MODERN_GROUP = 'ModernGroup';
}
