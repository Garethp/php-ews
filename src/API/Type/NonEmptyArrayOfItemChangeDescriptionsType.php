<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfItemChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfItemChangeDescriptionsType
 *
 * @method NonEmptyArrayOfItemChangeDescriptionsType addAppendToItemField(AppendToItemFieldType $appendToItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType setAppendToItemField(array $appendToItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType addSetItemField(SetItemFieldType $setItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType setSetItemField(array $setItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType addDeleteItemField(DeleteItemFieldType $deleteItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType setDeleteItemField(array $deleteItemField)
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\AppendToItemFieldType[]
     */
    protected $appendToItemField = null;

    /**
     * @var \garethp\ews\API\Type\SetItemFieldType[]
     */
    protected $setItemField = null;

    /**
     * @var \garethp\ews\API\Type\DeleteItemFieldType[]
     */
    protected $deleteItemField = null;

    /**
     * @return AppendToItemFieldType[]
     */
    public function getAppendToItemField()
    {
        return $this->appendToItemField;
    }

    /**
     * @return SetItemFieldType[]
     */
    public function getSetItemField()
    {
        return $this->setItemField;
    }

    /**
     * @return DeleteItemFieldType[]
     */
    public function getDeleteItemField()
    {
        return $this->deleteItemField;
    }
}
