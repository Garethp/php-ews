<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing UserOofSettingsType
 *
 *
 * XSD Type: UserOofSettings
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
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getOofState()
    {
        return $this->oofState;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return UserOofSettingsType
     */
    public function setOofState($value)
    {
        $this->oofState = $this->castValueIfNeeded("oofState", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getExternalAudience()
    {
        return $this->externalAudience;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return UserOofSettingsType
     */
    public function setExternalAudience($value)
    {
        $this->externalAudience = $this->castValueIfNeeded("externalAudience", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DurationType
     * @return UserOofSettingsType
     */
    public function setDuration(DurationType $value)
    {
        $this->duration = $this->castValueIfNeeded("duration", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ReplyBodyType
     */
    public function getInternalReply()
    {
        return $this->internalReply;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ReplyBodyType
     * @return UserOofSettingsType
     */
    public function setInternalReply(ReplyBodyType $value)
    {
        $this->internalReply = $this->castValueIfNeeded("internalReply", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ReplyBodyType
     */
    public function getExternalReply()
    {
        return $this->externalReply;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ReplyBodyType
     * @return UserOofSettingsType
     */
    public function setExternalReply(ReplyBodyType $value)
    {
        $this->externalReply = $this->castValueIfNeeded("externalReply", $value);
        return $this;
    }
}
