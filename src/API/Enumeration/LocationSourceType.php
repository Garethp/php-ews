<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing LocationSourceType
 *
 *
 * XSD Type: LocationSourceType
 */
class LocationSourceType extends Enumeration
{

    const NONE = 'None';

    const LOCATION_SERVICES = 'LocationServices';

    const PHONEBOOK_SERVICES = 'PhonebookServices';

    const DEVICE = 'Device';

    const CONTACT = 'Contact';

    const RESOURCE = 'Resource';
}
