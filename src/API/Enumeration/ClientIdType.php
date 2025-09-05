<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ClientIdType
 *
 *
 * XSD Type: ClientIdType
 */
class ClientIdType extends Enumeration
{

    const WEB = 'Web';

    const MOBILE = 'Mobile';

    const TABLET = 'Tablet';

    const DESKTOP = 'Desktop';

    const EXCHANGE = 'Exchange';

    const OUTLOOK = 'Outlook';

    const MAC_OUTLOOK = 'MacOutlook';

    const POP3 = 'POP3';

    const IMAP4 = 'IMAP4';

    const OTHER = 'Other';

    const LYNC = 'Lync';

    const OUTLOOK_SERVICE = 'OutlookService';

    const MAC_MAIL = 'MacMail';
}
