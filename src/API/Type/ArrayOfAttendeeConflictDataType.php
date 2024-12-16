<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ArrayOfAttendeeConflictDataType
 *
 *
 * XSD Type: ArrayOfAttendeeConflictData
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
     * @autogenerated This method is safe to replace
     * @param $value UnknownAttendeeConflictDataType
     * @return ArrayOfAttendeeConflictDataType
     */
    public function addUnknownAttendeeConflictData(UnknownAttendeeConflictDataType $value)
    {
        $value = $this->castValueIfNeeded("unknownAttendeeConflictData", $value);

        if ($this->unknownAttendeeConflictData === null) {
            $this->unknownAttendeeConflictData = array();
        }

        if (!is_array($this->unknownAttendeeConflictData)) {
            $this->unknownAttendeeConflictData = array($this->unknownAttendeeConflictData);
        }

        $this->unknownAttendeeConflictData[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return UnknownAttendeeConflictDataType[]
     */
    public function getUnknownAttendeeConflictData()
    {
        return $this->unknownAttendeeConflictData;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value UnknownAttendeeConflictDataType[]
     * @return ArrayOfAttendeeConflictDataType
     */
    public function setUnknownAttendeeConflictData(array $value)
    {
        $this->unknownAttendeeConflictData = $this->castValueIfNeeded("unknownAttendeeConflictData", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IndividualAttendeeConflictDataType
     * @return ArrayOfAttendeeConflictDataType
     */
    public function addIndividualAttendeeConflictData(IndividualAttendeeConflictDataType $value)
    {
        $value = $this->castValueIfNeeded("individualAttendeeConflictData", $value);

        if ($this->individualAttendeeConflictData === null) {
            $this->individualAttendeeConflictData = array();
        }

        if (!is_array($this->individualAttendeeConflictData)) {
            $this->individualAttendeeConflictData = array($this->individualAttendeeConflictData);
        }

        $this->individualAttendeeConflictData[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return IndividualAttendeeConflictDataType[]
     */
    public function getIndividualAttendeeConflictData()
    {
        return $this->individualAttendeeConflictData;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IndividualAttendeeConflictDataType[]
     * @return ArrayOfAttendeeConflictDataType
     */
    public function setIndividualAttendeeConflictData(array $value)
    {
        $this->individualAttendeeConflictData = $this->castValueIfNeeded("individualAttendeeConflictData", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TooBigGroupAttendeeConflictDataType
     * @return ArrayOfAttendeeConflictDataType
     */
    public function addTooBigGroupAttendeeConflictData(TooBigGroupAttendeeConflictDataType $value)
    {
        $value = $this->castValueIfNeeded("tooBigGroupAttendeeConflictData", $value);

        if ($this->tooBigGroupAttendeeConflictData === null) {
            $this->tooBigGroupAttendeeConflictData = array();
        }

        if (!is_array($this->tooBigGroupAttendeeConflictData)) {
            $this->tooBigGroupAttendeeConflictData = array($this->tooBigGroupAttendeeConflictData);
        }

        $this->tooBigGroupAttendeeConflictData[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return TooBigGroupAttendeeConflictDataType[]
     */
    public function getTooBigGroupAttendeeConflictData()
    {
        return $this->tooBigGroupAttendeeConflictData;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TooBigGroupAttendeeConflictDataType[]
     * @return ArrayOfAttendeeConflictDataType
     */
    public function setTooBigGroupAttendeeConflictData(array $value)
    {
        $this->tooBigGroupAttendeeConflictData = $this->castValueIfNeeded("tooBigGroupAttendeeConflictData", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GroupAttendeeConflictDataType
     * @return ArrayOfAttendeeConflictDataType
     */
    public function addGroupAttendeeConflictData(GroupAttendeeConflictDataType $value)
    {
        $value = $this->castValueIfNeeded("groupAttendeeConflictData", $value);

        if ($this->groupAttendeeConflictData === null) {
            $this->groupAttendeeConflictData = array();
        }

        if (!is_array($this->groupAttendeeConflictData)) {
            $this->groupAttendeeConflictData = array($this->groupAttendeeConflictData);
        }

        $this->groupAttendeeConflictData[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GroupAttendeeConflictDataType[]
     */
    public function getGroupAttendeeConflictData()
    {
        return $this->groupAttendeeConflictData;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GroupAttendeeConflictDataType[]
     * @return ArrayOfAttendeeConflictDataType
     */
    public function setGroupAttendeeConflictData(array $value)
    {
        $this->groupAttendeeConflictData = $this->castValueIfNeeded("groupAttendeeConflictData", $value);
        return $this;
    }
}
