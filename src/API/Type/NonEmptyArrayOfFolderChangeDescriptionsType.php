<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfFolderChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfFolderChangeDescriptionsType
 *
 * @method NonEmptyArrayOfFolderChangeDescriptionsType addAppendToFolderField(AppendToFolderFieldType $appendToFolderField)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setAppendToFolderField(array $appendToFolderField)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType addSetFolderField(SetFolderFieldType $setFolderField)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setSetFolderField(array $setFolderField)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType addDeleteFolderField(DeleteFolderFieldType $deleteFolderField)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setDeleteFolderField(array $deleteFolderField)
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\AppendToFolderFieldType[]
     */
    protected $appendToFolderField = null;

    /**
     * @var \garethp\ews\API\Type\SetFolderFieldType[]
     */
    protected $setFolderField = null;

    /**
     * @var \garethp\ews\API\Type\DeleteFolderFieldType[]
     */
    protected $deleteFolderField = null;

    /**
     * @return AppendToFolderFieldType[]
     */
    public function getAppendToFolderField()
    {
        return $this->appendToFolderField;
    }

    /**
     * @return SetFolderFieldType[]
     */
    public function getSetFolderField()
    {
        return $this->setFolderField;
    }

    /**
     * @return DeleteFolderFieldType[]
     */
    public function getDeleteFolderField()
    {
        return $this->deleteFolderField;
    }
}
