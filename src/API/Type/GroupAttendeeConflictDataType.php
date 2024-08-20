<?php

namespace garethp\ews\API\Type;

/**
 * Class representing GroupAttendeeConflictDataType
 *
 *
 * XSD Type: GroupAttendeeConflictData
 *
 * @method GroupAttendeeConflictDataType setNumberOfMembers(integer $numberOfMembers)
 * @method GroupAttendeeConflictDataType setNumberOfMembersAvailable(integer $numberOfMembersAvailable)
 * @method GroupAttendeeConflictDataType setNumberOfMembersWithConflict(integer $numberOfMembersWithConflict)
 * @method GroupAttendeeConflictDataType setNumberOfMembersWithNoData(integer $numberOfMembersWithNoData)
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
     * @return integer
     */
    public function getNumberOfMembersAvailable()
    {
        return $this->numberOfMembersAvailable;
    }

    /**
     * @return integer
     */
    public function getNumberOfMembersWithConflict()
    {
        return $this->numberOfMembersWithConflict;
    }

    /**
     * @return integer
     */
    public function getNumberOfMembersWithNoData()
    {
        return $this->numberOfMembersWithNoData;
    }
}
