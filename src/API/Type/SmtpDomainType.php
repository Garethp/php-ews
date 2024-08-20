<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SmtpDomainType
 *
 *
 * XSD Type: SmtpDomain
 *
 * @method string getName()
 * @method SmtpDomainType setName(string $name)
 * @method boolean getIncludeSubdomains()
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
     * @returns bool
     */
    public function isIncludeSubdomains()
    {
        return $this->includeSubdomains && $this->includeSubdomains;
    }
}
