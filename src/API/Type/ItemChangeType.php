<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ItemChangeType
 *
 *
 * XSD Type: ItemChangeType
 *
 * @method ItemChangeType setItemId(ItemIdType $itemId)
 * @method ItemChangeType setOccurrenceItemId(OccurrenceItemIdType $occurrenceItemId)
 * @method ItemChangeType setRecurringMasterItemId(RecurringMasterItemIdType $recurringMasterItemId)
 * @method ItemChangeType setUpdates(NonEmptyArrayOfItemChangeDescriptionsType $updates)
 */
class ItemChangeType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \garethp\ews\API\Type\OccurrenceItemIdType
     */
    protected $occurrenceItemId = null;

    /**
     * @var \garethp\ews\API\Type\RecurringMasterItemIdType
     */
    protected $recurringMasterItemId = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfItemChangeDescriptionsType
     */
    protected $updates = null;

    /**
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return OccurrenceItemIdType
     */
    public function getOccurrenceItemId()
    {
        return $this->occurrenceItemId;
    }

    /**
     * @return RecurringMasterItemIdType
     */
    public function getRecurringMasterItemId()
    {
        return $this->recurringMasterItemId;
    }

    /**
     * @return NonEmptyArrayOfItemChangeDescriptionsType
     */
    public function getUpdates()
    {
        return $this->updates;
    }
}
