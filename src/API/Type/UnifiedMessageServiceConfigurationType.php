<?php

namespace garethp\ews\API\Type;

/**
 * Class representing UnifiedMessageServiceConfigurationType
 *
 *
 * XSD Type: UnifiedMessageServiceConfiguration
 */
class UnifiedMessageServiceConfigurationType extends ServiceConfigurationType
{

    /**
     * @var boolean
     */
    protected $umEnabled = null;

    /**
     * @var string
     */
    protected $playOnPhoneDialString = null;

    /**
     * @var boolean
     */
    protected $playOnPhoneEnabled = null;

    /**
     * @return boolean
     */
    public function getUmEnabled()
    {
        return $this->umEnabled;
    }

    /**
     * @return string
     */
    public function getPlayOnPhoneDialString()
    {
        return $this->playOnPhoneDialString;
    }

    /**
     * @return boolean
     */
    public function getPlayOnPhoneEnabled()
    {
        return $this->playOnPhoneEnabled;
    }

    /**
     * @returns bool
     */
    public function isUmEnabled()
    {
        return ((bool) $this->umEnabled);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return UnifiedMessageServiceConfigurationType
     */
    public function setUmEnabled($value)
    {
        $this->umEnabled = $this->castValueIfNeeded("umEnabled", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return UnifiedMessageServiceConfigurationType
     */
    public function setPlayOnPhoneDialString($value)
    {
        $this->playOnPhoneDialString = $this->castValueIfNeeded("playOnPhoneDialString", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isPlayOnPhoneEnabled()
    {
        return ((bool) $this->playOnPhoneEnabled);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return UnifiedMessageServiceConfigurationType
     */
    public function setPlayOnPhoneEnabled($value)
    {
        $this->playOnPhoneEnabled = $this->castValueIfNeeded("playOnPhoneEnabled", $value);
        return $this;
    }
}
