<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing PredictedActionReasonType
 *
 *
 * XSD Type: PredictedActionReasonType
 */
class PredictedActionReasonType extends Enumeration
{

    const NONE = 'None';

    const CONVERSATION_STARTER_IS_YOU = 'ConversationStarterIsYou';

    const ONLY_RECIPIENT = 'OnlyRecipient';

    const CONVERSATION_CONTRIBUTIONS = 'ConversationContributions';

    const MARKED_IMPORTANT_BY_SENDER = 'MarkedImportantBySender';

    const SENDER_IS_MANAGER = 'SenderIsManager';

    const SENDER_IS_IN_MANAGEMENT_CHAIN = 'SenderIsInManagementChain';

    const SENDER_IS_DIRECT_REPORT = 'SenderIsDirectReport';

    const ACTION_BASED_ON_SENDER = 'ActionBasedOnSender';

    const NAME_ON_TO_LINE = 'NameOnToLine';

    const NAME_ON_CC_LINE = 'NameOnCcLine';

    const MANAGER_POSITION = 'ManagerPosition';

    const REPLY_TO_AMESSAGE_FROM_ME = 'ReplyToAMessageFromMe';

    const PREVIOUSLY_FLAGGED = 'PreviouslyFlagged';

    const ACTION_BASED_ON_RECIPIENTS = 'ActionBasedOnRecipients';

    const ACTION_BASED_ON_SUBJECT_WORDS = 'ActionBasedOnSubjectWords';

    const ACTION_BASED_ON_BASED_ON_BODY_WORDS = 'ActionBasedOnBasedOnBodyWords';
}
