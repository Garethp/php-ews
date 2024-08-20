<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseItemIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseItemIdsType
 *
 * @method NonEmptyArrayOfBaseItemIdsType addItemId(ItemIdType $itemId)
 * @method NonEmptyArrayOfBaseItemIdsType setItemId(array $itemId)
 * @method NonEmptyArrayOfBaseItemIdsType addOccurrenceItemId(OccurrenceItemIdType $occurrenceItemId)
 * @method NonEmptyArrayOfBaseItemIdsType setOccurrenceItemId(array $occurrenceItemId)
 * @method NonEmptyArrayOfBaseItemIdsType addRecurringMasterItemId(RecurringMasterItemIdType $recurringMasterItemId)
 * @method NonEmptyArrayOfBaseItemIdsType setRecurringMasterItemId(array $recurringMasterItemId)
 */
class NonEmptyArrayOfBaseItemIdsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType[]
     */
    protected $itemId = null;

    /**
     * @var \garethp\ews\API\Type\OccurrenceItemIdType[]
     */
    protected $occurrenceItemId = null;

    /**
     * @var \garethp\ews\API\Type\RecurringMasterItemIdType[]
     */
    protected $recurringMasterItemId = null;

    /**
     * @return ItemIdType[]
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return OccurrenceItemIdType[]
     */
    public function getOccurrenceItemId()
    {
        return $this->occurrenceItemId;
    }

    /**
     * @return RecurringMasterItemIdType[]
     */
    public function getRecurringMasterItemId()
    {
        return $this->recurringMasterItemId;
    }
}
