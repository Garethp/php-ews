<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing MailboxTypeType
 *
 *
 * XSD Type: MailboxTypeType
 */
class MailboxTypeType extends Enumeration
{

    const CONTACT = 'Contact';

    const MAILBOX = 'Mailbox';

    const ONE_OFF = 'OneOff';

    const PRIVATE_DISTRIBUTION_LIST = 'PrivateDL';

    const PUBLIC_DISTRIBUTION_LIST = 'PublicDL';

    const PUBLIC_FOLDER = 'PublicFolder';

    const UNKNOWN = 'Unknown';

    const PUBLIC_DL = 'PublicDL';

    const PRIVATE_DL = 'PrivateDL';
}
