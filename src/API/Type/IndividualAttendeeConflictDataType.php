<?php

namespace garethp\ews\API\Type;

/**
 * Class representing IndividualAttendeeConflictDataType
 *
 *
 * XSD Type: IndividualAttendeeConflictData
 *
 * @method IndividualAttendeeConflictDataType setBusyType(string $busyType)
 */
class IndividualAttendeeConflictDataType extends AttendeeConflictDataType
{

    /**
     * @var string
     */
    protected $busyType = null;

    /**
     * @return string
     */
    public function getBusyType()
    {
        return $this->busyType;
    }
}
