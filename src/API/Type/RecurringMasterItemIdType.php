<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RecurringMasterItemIdType
 *
 *
 * XSD Type: RecurringMasterItemIdType
 */
class RecurringMasterItemIdType extends BaseItemIdType
{

    /**
     * @var string
     */
    protected $occurrenceId = null;

    /**
     * @var string
     */
    protected $changeKey = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getOccurrenceId()
    {
        return $this->occurrenceId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return RecurringMasterItemIdType
     */
    public function setOccurrenceId($value)
    {
        $this->occurrenceId = $this->castValueIfNeeded("occurrenceId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getChangeKey()
    {
        return $this->changeKey;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return RecurringMasterItemIdType
     */
    public function setChangeKey($value)
    {
        $this->changeKey = $this->castValueIfNeeded("changeKey", $value);
        return $this;
    }
}
