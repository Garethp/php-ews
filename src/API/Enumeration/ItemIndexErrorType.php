<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ItemIndexErrorType
 *
 *
 * XSD Type: ItemIndexErrorType
 */
class ItemIndexErrorType extends Enumeration
{

    const NONE = 'None';

    const GENERIC_ERROR = 'GenericError';

    const TIMEOUT = 'Timeout';

    const STALE_EVENT = 'StaleEvent';

    const MAILBOX_OFFLINE = 'MailboxOffline';

    const ATTACHMENT_LIMIT_REACHED = 'AttachmentLimitReached';

    const MARS_WRITER_TRUNCATION = 'MarsWriterTruncation';

    const DOCUMENT_PARSER_FAILURE = 'DocumentParserFailure';
}
