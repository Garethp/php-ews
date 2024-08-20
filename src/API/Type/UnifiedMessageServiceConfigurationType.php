<?php

namespace garethp\ews\API\Type;

/**
 * Class representing UnifiedMessageServiceConfigurationType
 *
 *
 * XSD Type: UnifiedMessageServiceConfiguration
 *
 * @method boolean getUmEnabled()
 * @method UnifiedMessageServiceConfigurationType setUmEnabled(boolean $umEnabled)
 * @method string getPlayOnPhoneDialString()
 * @method UnifiedMessageServiceConfigurationType setPlayOnPhoneDialString(string $playOnPhoneDialString)
 * @method boolean getPlayOnPhoneEnabled()
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
     * @returns bool
     */
    public function isPlayOnPhoneEnabled()
    {
        return ((bool) $this->playOnPhoneEnabled);
    }
}
