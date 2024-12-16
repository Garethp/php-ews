<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfItemChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfItemChangeDescriptionsType
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
     * @autogenerated This method is safe to replace
     * @param $value AppendToItemFieldType
     * @return NonEmptyArrayOfItemChangeDescriptionsType
     */
    public function addAppendToItemField(AppendToItemFieldType $value)
    {
        $value = $this->castValueIfNeeded("appendToItemField", $value);

        if ($this->appendToItemField === null) {
            $this->appendToItemField = array();
        }

        if (!is_array($this->appendToItemField)) {
            $this->appendToItemField = array($this->appendToItemField);
        }

        $this->appendToItemField[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return AppendToItemFieldType[]
     */
    public function getAppendToItemField()
    {
        return $this->appendToItemField;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AppendToItemFieldType[]
     * @return NonEmptyArrayOfItemChangeDescriptionsType
     */
    public function setAppendToItemField(array $value)
    {
        $this->appendToItemField = $this->castValueIfNeeded("appendToItemField", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SetItemFieldType
     * @return NonEmptyArrayOfItemChangeDescriptionsType
     */
    public function addSetItemField(SetItemFieldType $value)
    {
        $value = $this->castValueIfNeeded("setItemField", $value);

        if ($this->setItemField === null) {
            $this->setItemField = array();
        }

        if (!is_array($this->setItemField)) {
            $this->setItemField = array($this->setItemField);
        }

        $this->setItemField[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SetItemFieldType[]
     */
    public function getSetItemField()
    {
        return $this->setItemField;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SetItemFieldType[]
     * @return NonEmptyArrayOfItemChangeDescriptionsType
     */
    public function setSetItemField(array $value)
    {
        $this->setItemField = $this->castValueIfNeeded("setItemField", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DeleteItemFieldType
     * @return NonEmptyArrayOfItemChangeDescriptionsType
     */
    public function addDeleteItemField(DeleteItemFieldType $value)
    {
        $value = $this->castValueIfNeeded("deleteItemField", $value);

        if ($this->deleteItemField === null) {
            $this->deleteItemField = array();
        }

        if (!is_array($this->deleteItemField)) {
            $this->deleteItemField = array($this->deleteItemField);
        }

        $this->deleteItemField[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return DeleteItemFieldType[]
     */
    public function getDeleteItemField()
    {
        return $this->deleteItemField;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DeleteItemFieldType[]
     * @return NonEmptyArrayOfItemChangeDescriptionsType
     */
    public function setDeleteItemField(array $value)
    {
        $this->deleteItemField = $this->castValueIfNeeded("deleteItemField", $value);
        return $this;
    }
}
