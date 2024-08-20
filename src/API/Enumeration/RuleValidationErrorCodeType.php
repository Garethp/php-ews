<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing RuleValidationErrorCodeType
 *
 * Rule validation error code describing what failed validation for each rule
 * predicate or action.
 * XSD Type: RuleValidationErrorCodeType
 */
class RuleValidationErrorCodeType extends Enumeration
{

    const AD_OPERATION_FAILURE = 'ADOperationFailure';

    const CONNECTED_ACCOUNT_NOT_FOUND = 'ConnectedAccountNotFound';

    const CREATE_WITH_RULE_ID = 'CreateWithRuleId';

    const DUPLICATED_OPERATION_ON_THE_SAME_RULE = 'DuplicatedOperationOnTheSameRule';

    const DUPLICATED_PRIORITY = 'DuplicatedPriority';

    const EMPTY_VALUE_FOUND = 'EmptyValueFound';

    const FOLDER_DOES_NOT_EXIST = 'FolderDoesNotExist';

    const INVALID_ADDRESS = 'InvalidAddress';

    const INVALID_DATE_RANGE = 'InvalidDateRange';

    const INVALID_FOLDER_ID = 'InvalidFolderId';

    const INVALID_SIZE_RANGE = 'InvalidSizeRange';

    const INVALID_VALUE = 'InvalidValue';

    const MESSAGE_CLASSIFICATION_NOT_FOUND = 'MessageClassificationNotFound';

    const MISSING_ACTION = 'MissingAction';

    const MISSING_PARAMETER = 'MissingParameter';

    const MISSING_RANGE_VALUE = 'MissingRangeValue';

    const NOT_SETTABLE = 'NotSettable';

    const RECIPIENT_DOES_NOT_EXIST = 'RecipientDoesNotExist';

    const RULE_NOT_FOUND = 'RuleNotFound';

    const SIZE_LESS_THAN_ZERO = 'SizeLessThanZero';

    const STRING_VALUE_TOO_BIG = 'StringValueTooBig';

    const UNEXPECTED_ERROR = 'UnexpectedError';

    const UNSUPPORTED_ADDRESS = 'UnsupportedAddress';

    const UNSUPPORTED_RULE = 'UnsupportedRule';

    const ADOPERATION_FAILURE = 'ADOperationFailure';
}
