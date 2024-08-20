<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ArrayOfAttendeeConflictDataType
 *
 *
 * XSD Type: ArrayOfAttendeeConflictData
 *
 * @method ArrayOfAttendeeConflictDataType addUnknownAttendeeConflictData(UnknownAttendeeConflictDataType $unknownAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType setUnknownAttendeeConflictData(array $unknownAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType addIndividualAttendeeConflictData(IndividualAttendeeConflictDataType $individualAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType setIndividualAttendeeConflictData(array $individualAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType addTooBigGroupAttendeeConflictData(TooBigGroupAttendeeConflictDataType $tooBigGroupAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType setTooBigGroupAttendeeConflictData(array $tooBigGroupAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType addGroupAttendeeConflictData(GroupAttendeeConflictDataType $groupAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType setGroupAttendeeConflictData(array $groupAttendeeConflictData)
 */
class ArrayOfAttendeeConflictDataType extends Type
{

    /**
     * @var \garethp\ews\API\Type\UnknownAttendeeConflictDataType[]
     */
    protected $unknownAttendeeConflictData = null;

    /**
     * @var \garethp\ews\API\Type\IndividualAttendeeConflictDataType[]
     */
    protected $individualAttendeeConflictData = null;

    /**
     * @var \garethp\ews\API\Type\TooBigGroupAttendeeConflictDataType[]
     */
    protected $tooBigGroupAttendeeConflictData = null;

    /**
     * @var \garethp\ews\API\Type\GroupAttendeeConflictDataType[]
     */
    protected $groupAttendeeConflictData = null;

    /**
     * @return UnknownAttendeeConflictDataType[]
     */
    public function getUnknownAttendeeConflictData()
    {
        return $this->unknownAttendeeConflictData;
    }

    /**
     * @return IndividualAttendeeConflictDataType[]
     */
    public function getIndividualAttendeeConflictData()
    {
        return $this->individualAttendeeConflictData;
    }

    /**
     * @return TooBigGroupAttendeeConflictDataType[]
     */
    public function getTooBigGroupAttendeeConflictData()
    {
        return $this->tooBigGroupAttendeeConflictData;
    }

    /**
     * @return GroupAttendeeConflictDataType[]
     */
    public function getGroupAttendeeConflictData()
    {
        return $this->groupAttendeeConflictData;
    }
}
