<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing MailboxSearchLocationType
 *
 *
 * XSD Type: MailboxSearchLocationType
 */
class MailboxSearchLocationType extends Enumeration
{

    const ALL = 'All';

    const ARCHIVE = 'ArchiveOnly';

    const PRIMARY = 'PrimaryOnly';

    const PRIMARY_ONLY = 'PrimaryOnly';

    const ARCHIVE_ONLY = 'ArchiveOnly';
}
