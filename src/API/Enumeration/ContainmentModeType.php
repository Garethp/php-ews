<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ContainmentModeType
 *
 *
 * XSD Type: ContainmentModeType
 */
class ContainmentModeType extends Enumeration
{

    const EXACT_PHRASE = 'ExactPhrase';

    const FULL_STRING = 'FullString';

    const PREFIX_ON_WORDS = 'PrefixOnWords';

    const PREFIXED = 'Prefixed';

    const SUBSTRING = 'Substring';
}
