<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RecurringMasterItemIdType
 *
 *
 * XSD Type: RecurringMasterItemIdType
 *
 * @method RecurringMasterItemIdType setOccurrenceId(string $occurrenceId)
 * @method RecurringMasterItemIdType setChangeKey(string $changeKey)
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
     * @return string
     */
    public function getOccurrenceId()
    {
        return $this->occurrenceId;
    }

    /**
     * @return string
     */
    public function getChangeKey()
    {
        return $this->changeKey;
    }
}
