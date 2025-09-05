<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing EmailPositionType
 *
 *
 * XSD Type: EmailPositionType
 */
class EmailPositionType extends Enumeration
{

    const LATEST_REPLY = 'LatestReply';

    const OTHER = 'Other';

    const SUBJECT = 'Subject';

    const SIGNATURE = 'Signature';
}
