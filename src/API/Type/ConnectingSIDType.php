<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ConnectingSIDType
 *
 *
 * XSD Type: ConnectingSIDType
 *
 * @method ConnectingSIDType setPrincipalName(string $principalName)
 * @method ConnectingSIDType setSID(string $sID)
 * @method ConnectingSIDType setPrimarySmtpAddress(string $primarySmtpAddress)
 * @method ConnectingSIDType setSmtpAddress(string $smtpAddress)
 */
class ConnectingSIDType extends Type
{

    /**
     * @var string
     */
    protected $principalName = null;

    /**
     * @var string
     */
    protected $sID = null;

    /**
     * @var string
     */
    protected $primarySmtpAddress = null;

    /**
     * @var string
     */
    protected $smtpAddress = null;

    /**
     * @return string
     */
    public function getPrincipalName()
    {
        return $this->principalName;
    }

    /**
     * @return string
     */
    public function getSID()
    {
        return $this->sID;
    }

    /**
     * @return string
     */
    public function getPrimarySmtpAddress()
    {
        return $this->primarySmtpAddress;
    }

    /**
     * @return string
     */
    public function getSmtpAddress()
    {
        return $this->smtpAddress;
    }
}
