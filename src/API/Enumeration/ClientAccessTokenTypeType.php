<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ClientAccessTokenTypeType
 *
 *
 * XSD Type: ClientAccessTokenTypeType
 */
class ClientAccessTokenTypeType extends Enumeration
{

    const CALLER_IDENTITY = 'CallerIdentity';

    const EXTENSION_CALLBACK = 'ExtensionCallback';

    const SCOPED_TOKEN = 'ScopedToken';

    const EXTENSION_REST_API_CALLBACK = 'ExtensionRestApiCallback';

    const CONNECTORS = 'Connectors';

    const LOKI = 'Loki';

    const DESKTOP_OUTLOOK = 'DesktopOutlook';
}
