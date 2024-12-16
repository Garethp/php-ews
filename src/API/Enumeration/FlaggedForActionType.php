<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing FlaggedForActionType
 *
 * Flagged for action enumeration, currently used in FlaggedForAction rule
 * predicate
 * XSD Type: FlaggedForActionType
 */
class FlaggedForActionType extends Enumeration
{

    const ANY = 'Any';

    const CALL = 'Call';

    const DO_NOT_FORWARD = 'DoNotForward';

    const FOLLOW_UP = 'FollowUp';

    const FORWARD = 'Forward';

    const FYI = 'FYI';

    const NO_RESPONSE_NECESSARY = 'NoResponseNecessary';

    const READ = 'Read';

    const REPLY = 'Reply';

    const REPLY_TO_ALL = 'ReplyToAll';

    const REVIEW = 'Review';
}
