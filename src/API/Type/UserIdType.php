<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing UserIdType
 *
 *
 * XSD Type: UserIdType
 *
 * @method UserIdType setSID(string $sID)
 * @method UserIdType setPrimarySmtpAddress(string $primarySmtpAddress)
 * @method UserIdType setDisplayName(string $displayName)
 * @method UserIdType setDistinguishedUser(string $distinguishedUser)
 * @method UserIdType setExternalUserIdentity(string $externalUserIdentity)
 */
class UserIdType extends Type
{

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
    protected $displayName = null;

    /**
     * @var string
     */
    protected $distinguishedUser = null;

    /**
     * @var string
     */
    protected $externalUserIdentity = null;

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
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return string
     */
    public function getDistinguishedUser()
    {
        return $this->distinguishedUser;
    }

    /**
     * @return string
     */
    public function getExternalUserIdentity()
    {
        return $this->externalUserIdentity;
    }
}
