<?php

namespace garethp\ews\API\Type;

/**
 * Class representing CalendarFolderType
 *
 *
 * XSD Type: CalendarFolderType
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return CalendarFolderType
     */
    public function setSharingEffectiveRights($value)
    {
        $this->sharingEffectiveRights = $this->castValueIfNeeded("sharingEffectiveRights", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value CalendarPermissionSetType
     * @return CalendarFolderType
     */
    public function setPermissionSet(CalendarPermissionSetType $value)
    {
        $this->permissionSet = $this->castValueIfNeeded("permissionSet", $value);
        return $this;
    }
}
