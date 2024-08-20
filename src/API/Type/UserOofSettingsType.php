<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing UserOofSettingsType
 *
 *
 * XSD Type: UserOofSettings
 *
 * @method UserOofSettingsType setOofState(string $oofState)
 * @method UserOofSettingsType setExternalAudience(string $externalAudience)
 * @method UserOofSettingsType setDuration(DurationType $duration)
 * @method UserOofSettingsType setInternalReply(ReplyBodyType $internalReply)
 * @method UserOofSettingsType setExternalReply(ReplyBodyType $externalReply)
 */
class UserOofSettingsType extends Type
{

    /**
     * @var string
     */
    protected $oofState = null;

    /**
     * @var string
     */
    protected $externalAudience = null;

    /**
     * @var \garethp\ews\API\Type\DurationType
     */
    protected $duration = null;

    /**
     * @var \garethp\ews\API\Type\ReplyBodyType
     */
    protected $internalReply = null;

    /**
     * @var \garethp\ews\API\Type\ReplyBodyType
     */
    protected $externalReply = null;

    /**
     * @return string
     */
    public function getOofState()
    {
        return $this->oofState;
    }

    /**
     * @return string
     */
    public function getExternalAudience()
    {
        return $this->externalAudience;
    }

    /**
     * @return DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return ReplyBodyType
     */
    public function getInternalReply()
    {
        return $this->internalReply;
    }

    /**
     * @return ReplyBodyType
     */
    public function getExternalReply()
    {
        return $this->externalReply;
    }
}
