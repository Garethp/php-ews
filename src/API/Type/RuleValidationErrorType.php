<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RuleValidationErrorType
 *
 * Represents a single validation error on a particular rule property value, predicate property value or action property value
 * XSD Type: RuleValidationErrorType
 *
 * @method RuleValidationErrorType setFieldURI(string $fieldURI)
 * @method RuleValidationErrorType setErrorCode(string $errorCode)
 * @method RuleValidationErrorType setErrorMessage(string $errorMessage)
 * @method RuleValidationErrorType setFieldValue(string $fieldValue)
 */
class RuleValidationErrorType extends Type
{

    /**
     * @var string
     */
    protected $fieldURI = null;

    /**
     * @var string
     */
    protected $errorCode = null;

    /**
     * @var string
     */
    protected $errorMessage = null;

    /**
     * @var string
     */
    protected $fieldValue = null;

    /**
     * @return string
     */
    public function getFieldURI()
    {
        return $this->fieldURI;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @return string
     */
    public function getFieldValue()
    {
        return $this->fieldValue;
    }
}
