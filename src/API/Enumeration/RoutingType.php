<?php
/**
 * Contains \garethp\ews\API\Enumeration\RoutingType.
 */

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Represents the routing protocol for a recipient.
 *
 * @package php-ews\Enumeration
 */
class RoutingType extends Enumeration
{
    /**
     * Route the email using the SMTP protocol.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SMTP = 'SMTP';
}
