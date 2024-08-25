<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing CalendarPermissionLevelType
 *
 *
 * XSD Type: CalendarPermissionLevelType
 */
class CalendarPermissionLevelType extends Enumeration
{

    const FREE_BUSY_ONLY = 'FreeBusyTimeOnly';

    const FREE_BUSY_SUBJECT_AND_LOCATION = 'FreeBusyTimeAndSubjectAndLocation';

    const AUTHOR = 'Author';

    const CONTRIBUTOR = 'Contributor';

    const CUSTOM = 'Custom';

    const EDITOR = 'Editor';

    const NON_EDITING_AUTHOR = 'NoneditingAuthor';

    const NONE = 'None';

    const OWNER = 'Owner';

    const PUBLISHING_AUTHOR = 'PublishingAuthor';

    const PUBLISHING_EDITOR = 'PublishingEditor';

    const REVIEWER = 'Reviewer';

    const NONEDITING_AUTHOR = 'NoneditingAuthor';

    const FREE_BUSY_TIME_ONLY = 'FreeBusyTimeOnly';

    const FREE_BUSY_TIME_AND_SUBJECT_AND_LOCATION = 'FreeBusyTimeAndSubjectAndLocation';
}
