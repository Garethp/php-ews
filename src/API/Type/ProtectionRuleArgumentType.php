<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ProtectionRuleArgumentType
 *
 *
 * XSD Type: ProtectionRuleArgumentType
 *
 * @method ProtectionRuleArgumentType setValue(string $value)
 */
class ProtectionRuleArgumentType extends Type
{

    /**
     * @var string
     */
    protected $value = null;

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
