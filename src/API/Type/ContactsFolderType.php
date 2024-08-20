<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ContactsFolderType
 *
 *
 * XSD Type: ContactsFolderType
 *
 * @method ContactsFolderType setSharingEffectiveRights(string $sharingEffectiveRights)
 * @method ContactsFolderType setPermissionSet(PermissionSetType $permissionSet)
 */
class ContactsFolderType extends BaseFolderType
{

    /**
     * @var string
     */
    protected $sharingEffectiveRights = null;

    /**
     * @var \garethp\ews\API\Type\PermissionSetType
     */
    protected $permissionSet = null;

    /**
     * @return string
     */
    public function getSharingEffectiveRights()
    {
        return $this->sharingEffectiveRights;
    }

    /**
     * @return PermissionSetType
     */
    public function getPermissionSet()
    {
        return $this->permissionSet;
    }
}
