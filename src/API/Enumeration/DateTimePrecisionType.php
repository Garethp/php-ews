<?php
/**
 * Contains \garethp\ews\API\Enumeration\DateTimePrecisionType.
 */

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Specifies the precision for returned date/time values.
 *
 * @package php-ews\Enumeration
 */
class DateTimePrecisionType extends Enumeration
{
    /**
     * Indicates that date/time values should be precise to the millisecond.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const MILLISECONDS = 'Milliseconds';

    /**
     * Indicates that date/time values should be precise to the second.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const SECONDS = 'Seconds';
}
