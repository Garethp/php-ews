<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ReportMessageActionType
 *
 * Surfaces the various report message action types
 * XSD Type: ReportMessageActionType
 */
class ReportMessageActionType extends Enumeration
{

    const JUNK = 'Junk';

    const NOT_JUNK = 'NotJunk';

    const PHISH = 'Phish';

    const UNSUBSCRIBE = 'Unsubscribe';
}
