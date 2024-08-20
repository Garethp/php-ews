<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ProtectionRuleAndType
 *
 *
 * XSD Type: ProtectionRuleAndType
 *
 * @method ProtectionRuleAndType addAllInternal(string $allInternal)
 * @method ProtectionRuleAndType setAllInternal(array $allInternal)
 * @method ProtectionRuleAndType addAnd(ProtectionRuleAndType $and)
 * @method ProtectionRuleAndType setAnd(array $and)
 * @method ProtectionRuleAndType addRecipientIs(string $recipientIs)
 * @method ProtectionRuleAndType setRecipientIs(array $recipientIs)
 * @method ProtectionRuleAndType addSenderDepartments(string $senderDepartments)
 * @method ProtectionRuleAndType setSenderDepartments(array $senderDepartments)
 * @method ProtectionRuleAndType addTrue(string $true)
 * @method ProtectionRuleAndType setTrue(array $true)
 */
class ProtectionRuleAndType extends Type
{

    /**
     * @var string[]
     */
    protected $allInternal = null;

    /**
     * @var \garethp\ews\API\Type\ProtectionRuleAndType[]
     */
    protected $and = null;

    /**
     * @var string[]
     */
    protected $recipientIs = null;

    /**
     * @var string[]
     */
    protected $senderDepartments = null;

    /**
     * @var string[]
     */
    protected $true = null;

    /**
     * @return string[]
     */
    public function getAllInternal()
    {
        return $this->allInternal;
    }

    /**
     * @return ProtectionRuleAndType[]
     */
    public function getAnd()
    {
        return $this->and;
    }

    /**
     * @return string[]
     */
    public function getRecipientIs()
    {
        return $this->recipientIs;
    }

    /**
     * @return string[]
     */
    public function getSenderDepartments()
    {
        return $this->senderDepartments;
    }

    /**
     * @return string[]
     */
    public function getTrue()
    {
        return $this->true;
    }
}
