<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing OpenAsAdminOrSystemServiceType
 *
 *
 * XSD Type: OpenAsAdminOrSystemServiceType
 *
 * @method OpenAsAdminOrSystemServiceType setLogonType(string $logonType)
 * @method OpenAsAdminOrSystemServiceType setConnectingSID(ConnectingSIDType $connectingSID)
 */
class OpenAsAdminOrSystemServiceType extends Type
{

    /**
     * @var string
     */
    protected $logonType = null;

    /**
     * @var \garethp\ews\API\Type\ConnectingSIDType
     */
    protected $connectingSID = null;

    /**
     * @return string
     */
    public function getLogonType()
    {
        return $this->logonType;
    }

    /**
     * @return ConnectingSIDType
     */
    public function getConnectingSID()
    {
        return $this->connectingSID;
    }
}
