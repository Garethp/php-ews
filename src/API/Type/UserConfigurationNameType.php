<?php

namespace garethp\ews\API\Type;

/**
 * Class representing UserConfigurationNameType
 *
 *
 * XSD Type: UserConfigurationNameType
 *
 * @method UserConfigurationNameType setName(string $name)
 */
class UserConfigurationNameType extends TargetFolderIdType
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
