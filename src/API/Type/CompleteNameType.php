<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing CompleteNameType
 *
 *
 * XSD Type: CompleteNameType
 *
 * @method CompleteNameType setTitle(string $title)
 * @method CompleteNameType setFirstName(string $firstName)
 * @method CompleteNameType setMiddleName(string $middleName)
 * @method CompleteNameType setLastName(string $lastName)
 * @method CompleteNameType setSuffix(string $suffix)
 * @method CompleteNameType setInitials(string $initials)
 * @method CompleteNameType setFullName(string $fullName)
 * @method CompleteNameType setNickname(string $nickname)
 * @method CompleteNameType setYomiFirstName(string $yomiFirstName)
 * @method CompleteNameType setYomiLastName(string $yomiLastName)
 */
class CompleteNameType extends Type
{

    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var string
     */
    protected $firstName = null;

    /**
     * @var string
     */
    protected $middleName = null;

    /**
     * @var string
     */
    protected $lastName = null;

    /**
     * @var string
     */
    protected $suffix = null;

    /**
     * @var string
     */
    protected $initials = null;

    /**
     * @var string
     */
    protected $fullName = null;

    /**
     * @var string
     */
    protected $nickname = null;

    /**
     * @var string
     */
    protected $yomiFirstName = null;

    /**
     * @var string
     */
    protected $yomiLastName = null;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @return string
     */
    public function getYomiFirstName()
    {
        return $this->yomiFirstName;
    }

    /**
     * @return string
     */
    public function getYomiLastName()
    {
        return $this->yomiLastName;
    }
}
