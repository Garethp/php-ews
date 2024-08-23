<?php

namespace garethp\ews\API\Type;

/**
 * Class representing GroupAttendeeConflictDataType
 *
 *
 * XSD Type: GroupAttendeeConflictData
 */
class GroupAttendeeConflictDataType extends AttendeeConflictDataType
{

    /**
     * @var integer
     */
    protected $numberOfMembers = null;

    /**
     * @var integer
     */
    protected $numberOfMembersAvailable = null;

    /**
     * @var integer
     */
    protected $numberOfMembersWithConflict = null;

    /**
     * @var integer
     */
    protected $numberOfMembersWithNoData = null;

    /**
     * @return integer
     */
    public function getNumberOfMembers()
    {
        return $this->numberOfMembers;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return GroupAttendeeConflictDataType
     */
    public function setNumberOfMembers($value)
    {
        $this->numberOfMembers = $this->castValueIfNeeded("numberOfMembers", $value);
        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfMembersAvailable()
    {
        return $this->numberOfMembersAvailable;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return GroupAttendeeConflictDataType
     */
    public function setNumberOfMembersAvailable($value)
    {
        $this->numberOfMembersAvailable = $this->castValueIfNeeded("numberOfMembersAvailable", $value);
        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfMembersWithConflict()
    {
        return $this->numberOfMembersWithConflict;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return GroupAttendeeConflictDataType
     */
    public function setNumberOfMembersWithConflict($value)
    {
        $this->numberOfMembersWithConflict = $this->castValueIfNeeded("numberOfMembersWithConflict", $value);
        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfMembersWithNoData()
    {
        return $this->numberOfMembersWithNoData;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return GroupAttendeeConflictDataType
     */
    public function setNumberOfMembersWithNoData($value)
    {
        $this->numberOfMembersWithNoData = $this->castValueIfNeeded("numberOfMembersWithNoData", $value);
        return $this;
    }
}
