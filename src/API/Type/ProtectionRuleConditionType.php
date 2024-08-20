<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ProtectionRuleConditionType
 *
 *
 * XSD Type: ProtectionRuleConditionType
 *
 * @method ProtectionRuleConditionType setAllInternal(string $allInternal)
 * @method ProtectionRuleConditionType setAnd(ProtectionRuleAndType $and)
 * @method ProtectionRuleConditionType addRecipientIs(string $recipientIs)
 * @method ProtectionRuleConditionType setRecipientIs(array $recipientIs)
 * @method ProtectionRuleConditionType addSenderDepartments(string $senderDepartments)
 * @method ProtectionRuleConditionType setSenderDepartments(array $senderDepartments)
 * @method ProtectionRuleConditionType setTrue(string $true)
 */
class ProtectionRuleConditionType extends Type
{

    /**
     * @var string
     */
    protected $allInternal = null;

    /**
     * @var \garethp\ews\API\Type\ProtectionRuleAndType
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
     * @var string
     */
    protected $true = null;

    /**
     * @return string
     */
    public function getAllInternal()
    {
        return $this->allInternal;
    }

    /**
     * @return ProtectionRuleAndType
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
     * @return string
     */
    public function getTrue()
    {
        return $this->true;
    }
}
