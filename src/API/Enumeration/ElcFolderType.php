<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ElcFolderType
 *
 *
 * XSD Type: ElcFolderType
 */
class ElcFolderType extends Enumeration
{

    const CALENDAR = 'Calendar';

    const CONTACTS = 'Contacts';

    const DELETED_ITEMS = 'DeletedItems';

    const DRAFTS = 'Drafts';

    const INBOX = 'Inbox';

    const JUNK_EMAIL = 'JunkEmail';

    const JOURNAL = 'Journal';

    const NOTES = 'Notes';

    const OUTBOX = 'Outbox';

    const SENT_ITEMS = 'SentItems';

    const TASKS = 'Tasks';

    const ALL = 'All';

    const MANAGED_CUSTOM_FOLDER = 'ManagedCustomFolder';

    const RSS_SUBSCRIPTIONS = 'RssSubscriptions';

    const SYNC_ISSUES = 'SyncIssues';

    const CONVERSATION_HISTORY = 'ConversationHistory';

    const PERSONAL = 'Personal';

    const RECOVERABLE_ITEMS = 'RecoverableItems';

    const NON_IPM_ROOT = 'NonIpmRoot';
}
