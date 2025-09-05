<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing RoleMemberTypeType
 *
 *
 * XSD Type: RoleMemberTypeType
 */
class RoleMemberTypeType extends Enumeration
{

    const NONE = 'None';

    const PASSPORT = 'Passport';

    const EVERYONE = 'Everyone';

    const EMAIL = 'Email';

    const PHONE = 'Phone';

    const SKYPE_ID = 'SkypeId';

    const EXTERNAL_ID = 'ExternalId';

    const GROUP = 'Group';

    const GUID = 'Guid';

    const ROLE = 'Role';

    const SERVICE = 'Service';

    const CIRCLE = 'Circle';

    const DOMAIN = 'Domain';

    const PARTNER = 'Partner';
}
