<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ContainmentComparisonType
 *
 *
 * XSD Type: ContainmentComparisonType
 */
class ContainmentComparisonType extends Enumeration
{

    const EXACT = 'Exact';

    const IGNORE_CASE = 'IgnoreCase';

    const IGNORE_CASE_AND_NON_SPACING_CHARS = 'IgnoreCaseAndNonSpacingCharacters';

    const IGNORE_NON_SPACING_CHARS = 'IgnoreNonSpacingCharacters';

    const LOOSE = 'Loose';

    const LOOSE_AND_IGNORE_CASE = 'LooseAndIgnoreCase';

    const LOOSE_AND_IGNORE_CASE_AND_IGNORE_NON_SPACING_CARS = 'LooseAndIgnoreCaseAndIgnoreNonSpace';

    const LOOSE_AND_IGNORE_NON_SPACING_CHARS = 'LooseAndIgnoreNonSpace';

    const IGNORE_NON_SPACING_CHARACTERS = 'IgnoreNonSpacingCharacters';

    const IGNORE_CASE_AND_NON_SPACING_CHARACTERS = 'IgnoreCaseAndNonSpacingCharacters';

    const LOOSE_AND_IGNORE_NON_SPACE = 'LooseAndIgnoreNonSpace';

    const LOOSE_AND_IGNORE_CASE_AND_IGNORE_NON_SPACE = 'LooseAndIgnoreCaseAndIgnoreNonSpace';
}
