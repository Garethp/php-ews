<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ParticipantActivityRoleType
 *
 *
 * XSD Type: ParticipantActivityRole
 */
class ParticipantActivityRoleType extends Enumeration
{

    const ORGANIZER = 'Organizer';

    const ATTENDEE = 'Attendee';

    const PRESENTER = 'Presenter';
}
