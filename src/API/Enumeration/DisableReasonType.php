<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing DisableReasonType
 *
 * List of possible reasons for disabling the client extension
 * XSD Type: DisableReasonType
 */
class DisableReasonType extends Enumeration
{

    const NO_REASON = 'NoReason';

    const OUTLOOK_CLIENT_PERFORMANCE = 'OutlookClientPerformance';

    const OWACLIENT_PERFORMANCE = 'OWAClientPerformance';

    const MOBILE_CLIENT_PERFORMANCE = 'MobileClientPerformance';
}
