<?php

namespace garethp\ews\API\Type;

/**
 * Class representing CalendarFolderType
 *
 *
 * XSD Type: CalendarFolderType
 *
 * @method CalendarFolderType setSharingEffectiveRights(string $sharingEffectiveRights)
 * @method CalendarFolderType setPermissionSet(CalendarPermissionSetType $permissionSet)
 */
class CalendarFolderType extends BaseFolderType
{

    /**
     * @var string
     */
    protected $sharingEffectiveRights = null;

    /**
     * @var \garethp\ews\API\Type\CalendarPermissionSetType
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
     * @return CalendarPermissionSetType
     */
    public function getPermissionSet()
    {
        return $this->permissionSet;
    }
}
