<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ConsentStateType
 *
 *
 * XSD Type: ConsentStateType
 */
class ConsentStateType extends Enumeration
{

    const NOT_RESPONDED = 'NotResponded';

    const NOT_CONSENTED = 'NotConsented';

    const CONSENTED = 'Consented';
}
