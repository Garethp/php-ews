<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing PhoneCallInformationType
 *
 *
 * XSD Type: PhoneCallInformationType
 *
 * @method PhoneCallInformationType setPhoneCallState(string $phoneCallState)
 * @method PhoneCallInformationType setConnectionFailureCause(string $connectionFailureCause)
 * @method PhoneCallInformationType setSIPResponseText(string $sIPResponseText)
 * @method PhoneCallInformationType setSIPResponseCode(integer $sIPResponseCode)
 */
class PhoneCallInformationType extends Type
{

    /**
     * @var string
     */
    protected $phoneCallState = null;

    /**
     * @var string
     */
    protected $connectionFailureCause = null;

    /**
     * @var string
     */
    protected $sIPResponseText = null;

    /**
     * @var integer
     */
    protected $sIPResponseCode = null;

    /**
     * @return string
     */
    public function getPhoneCallState()
    {
        return $this->phoneCallState;
    }

    /**
     * @return string
     */
    public function getConnectionFailureCause()
    {
        return $this->connectionFailureCause;
    }

    /**
     * @return string
     */
    public function getSIPResponseText()
    {
        return $this->sIPResponseText;
    }

    /**
     * @return integer
     */
    public function getSIPResponseCode()
    {
        return $this->sIPResponseCode;
    }
}
