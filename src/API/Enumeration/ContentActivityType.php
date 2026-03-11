<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ContentActivityType
 *
 *
 * XSD Type: ContentActivityType
 */
class ContentActivityType extends Enumeration
{

    const POLL = 'Poll';

    const WHITE_BOARD = 'WhiteBoard';

    const QAND_A = 'QAndA';

    const CHAT = 'Chat';

    const MEETING = 'Meeting';

    const ANNOTATIONS = 'Annotations';

    const SHARED_NOTES = 'SharedNotes';
}
