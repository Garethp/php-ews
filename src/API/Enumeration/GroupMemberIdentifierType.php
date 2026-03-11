<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing GroupMemberIdentifierType
 *
 *
 * XSD Type: GroupMemberIdentifierType
 */
class GroupMemberIdentifierType extends Enumeration
{

    const EXTERNAL_DIRECTORY_OBJECT_ID = 'ExternalDirectoryObjectId';

    const LEGACY_EXCHANGE_DN = 'LegacyExchangeDN';

    const SMTP_ADDRESS = 'SmtpAddress';
}
