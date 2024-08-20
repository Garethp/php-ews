<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RuleOperationErrorType
 *
 *
 * XSD Type: RuleOperationErrorType
 *
 * @method RuleOperationErrorType setOperationIndex(integer $operationIndex)
 * @method RuleOperationErrorType addValidationErrors(RuleValidationErrorType $validationErrors)
 * @method RuleOperationErrorType setValidationErrors(array $validationErrors)
 */
class RuleOperationErrorType extends Type
{

    /**
     * @var integer
     */
    protected $operationIndex = null;

    /**
     * @var \garethp\ews\API\Type\RuleValidationErrorType[]
     */
    protected $validationErrors = null;

    /**
     * @return integer
     */
    public function getOperationIndex()
    {
        return $this->operationIndex;
    }

    /**
     * @return RuleValidationErrorType[]
     */
    public function getValidationErrors()
    {
        return $this->validationErrors;
    }
}
