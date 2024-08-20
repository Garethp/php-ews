<?php

namespace garethp\ews\API\Type;

/**
 * Class representing UnifiedMessageServiceConfigurationType
 *
 *
 * XSD Type: UnifiedMessageServiceConfiguration
 *
 * @method UnifiedMessageServiceConfigurationType setUmEnabled(boolean $umEnabled)
 * @method UnifiedMessageServiceConfigurationType setPlayOnPhoneDialString(string $playOnPhoneDialString)
 * @method UnifiedMessageServiceConfigurationType setPlayOnPhoneEnabled(boolean $playOnPhoneEnabled)
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
     * @returns bool
     */
    public function isUmEnabled()
    {
        return ((bool) $this->umEnabled);
    }

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
     * @returns bool
     */
    public function isPlayOnPhoneEnabled()
    {
        return ((bool) $this->playOnPhoneEnabled);
    }

    /**
     * @return boolean
     */
    public function getPlayOnPhoneEnabled()
    {
        return $this->playOnPhoneEnabled;
    }
}
