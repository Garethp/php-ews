<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing SharingActionType
 *
 *
 * XSD Type: SharingAction
 */
class SharingActionType extends Enumeration
{

    const ACCEPT_AND_VIEW_CALENDAR = 'AcceptAndViewCalendar';

    const VIEW_CALENDAR = 'ViewCalendar';

    const ADD_THIS_CALENDAR = 'AddThisCalendar';

    const ACCEPT = 'Accept';
}
