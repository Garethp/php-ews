<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ArrayOfRuleOperationsType
 *
 * Represents an array of rule operations to be performed
 * XSD Type: ArrayOfRuleOperationsType
 *
 * @method ArrayOfRuleOperationsType addCreateRuleOperation(CreateRuleOperationType $createRuleOperation)
 * @method ArrayOfRuleOperationsType setCreateRuleOperation(array $createRuleOperation)
 * @method ArrayOfRuleOperationsType addSetRuleOperation(SetRuleOperationType $setRuleOperation)
 * @method ArrayOfRuleOperationsType setSetRuleOperation(array $setRuleOperation)
 * @method ArrayOfRuleOperationsType addDeleteRuleOperation(DeleteRuleOperationType $deleteRuleOperation)
 * @method ArrayOfRuleOperationsType setDeleteRuleOperation(array $deleteRuleOperation)
 */
class ArrayOfRuleOperationsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\CreateRuleOperationType[]
     */
    protected $createRuleOperation = null;

    /**
     * @var \garethp\ews\API\Type\SetRuleOperationType[]
     */
    protected $setRuleOperation = null;

    /**
     * @var \garethp\ews\API\Type\DeleteRuleOperationType[]
     */
    protected $deleteRuleOperation = null;

    /**
     * @return CreateRuleOperationType[]
     */
    public function getCreateRuleOperation()
    {
        return $this->createRuleOperation;
    }

    /**
     * @return SetRuleOperationType[]
     */
    public function getSetRuleOperation()
    {
        return $this->setRuleOperation;
    }

    /**
     * @return DeleteRuleOperationType[]
     */
    public function getDeleteRuleOperation()
    {
        return $this->deleteRuleOperation;
    }
}
