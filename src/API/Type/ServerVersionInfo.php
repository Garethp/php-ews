<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ServerVersionInfo
 *
 * @method ServerVersionInfo setMajorVersion(integer $majorVersion)
 * @method ServerVersionInfo setMinorVersion(integer $minorVersion)
 * @method ServerVersionInfo setMajorBuildNumber(integer $majorBuildNumber)
 * @method ServerVersionInfo setMinorBuildNumber(integer $minorBuildNumber)
 * @method ServerVersionInfo setVersion(string $version)
 */
class ServerVersionInfo extends Type
{

    /**
     * @var integer
     */
    protected $majorVersion = null;

    /**
     * @var integer
     */
    protected $minorVersion = null;

    /**
     * @var integer
     */
    protected $majorBuildNumber = null;

    /**
     * @var integer
     */
    protected $minorBuildNumber = null;

    /**
     * @var string
     */
    protected $version = null;

    /**
     * @return integer
     */
    public function getMajorVersion()
    {
        return $this->majorVersion;
    }

    /**
     * @return integer
     */
    public function getMinorVersion()
    {
        return $this->minorVersion;
    }

    /**
     * @return integer
     */
    public function getMajorBuildNumber()
    {
        return $this->majorBuildNumber;
    }

    /**
     * @return integer
     */
    public function getMinorBuildNumber()
    {
        return $this->minorBuildNumber;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
