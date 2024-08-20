<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ProtectionRulesServiceConfigurationType
 *
 *
 * XSD Type: ProtectionRulesServiceConfiguration
 *
 * @method ProtectionRulesServiceConfigurationType setRefreshInterval(integer $refreshInterval)
 * @method ProtectionRulesServiceConfigurationType addRules(ProtectionRuleType $rules)
 * @method ProtectionRulesServiceConfigurationType setRules(array $rules)
 * @method ProtectionRulesServiceConfigurationType addInternalDomains(SmtpDomainType $internalDomains)
 * @method ProtectionRulesServiceConfigurationType setInternalDomains(array $internalDomains)
 */
class ProtectionRulesServiceConfigurationType extends ServiceConfigurationType
{

    /**
     * @var integer
     */
    protected $refreshInterval = null;

    /**
     * @var \garethp\ews\API\Type\ProtectionRuleType[]
     */
    protected $rules = null;

    /**
     * @var \garethp\ews\API\Type\SmtpDomainType[]
     */
    protected $internalDomains = null;

    /**
     * @return integer
     */
    public function getRefreshInterval()
    {
        return $this->refreshInterval;
    }

    /**
     * @return ProtectionRuleType[]
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @return SmtpDomainType[]
     */
    public function getInternalDomains()
    {
        return $this->internalDomains;
    }
}
