<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ExchangeImpersonationType
 *
 *
 * XSD Type: ExchangeImpersonationType
 *
 * @method ExchangeImpersonationType setConnectingSID(ConnectingSIDType $connectingSID)
 */
class ExchangeImpersonationType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ConnectingSIDType
     */
    protected $connectingSID = null;

    public static function fromEmailAddress($emailAddress)
    {
        $impersonation = new self();
        $connectingSID = new ConnectingSIDType();
        $connectingSID->setPrimarySmtpAddress($emailAddress);

        $impersonation->setConnectingSID($connectingSID);
        return $impersonation;
    }

    /**
     * @return ConnectingSIDType
     */
    public function getConnectingSID()
    {
        return $this->connectingSID;
    }
}
