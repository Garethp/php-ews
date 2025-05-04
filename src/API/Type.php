<?php
/**
 * Contains \garethp\ews\API\Type.
 */

namespace garethp\ews\API;

use garethp\ews\BuildableTrait;

/**
 * Base class for Exchange Web Service Types.
 *
 * @package php-ews\Type
 */
#[\AllowDynamicProperties]
class Type
{
    use MagicMethodsTrait;
    use BuildableTrait;
}
