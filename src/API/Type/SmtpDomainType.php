<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SmtpDomainType
 *
 *
 * XSD Type: SmtpDomain
 *
 * @method SmtpDomainType setName(string $name)
 * @method SmtpDomainType setIncludeSubdomains(boolean $includeSubdomains)
 */
class SmtpDomainType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var boolean
     */
    protected $includeSubdomains = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @returns bool
     */
    public function isIncludeSubdomains()
    {
        return ((bool) $this->includeSubdomains);
    }

    /**
     * @return boolean
     */
    public function getIncludeSubdomains()
    {
        return $this->includeSubdomains;
    }
}
