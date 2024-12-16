<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing MapiPropertyTypeType
 *
 * Includes all of the extended property types that we support. Note that Error,
 * Null,
 *  Object and Object array can not be used in restrictions, or for setting/getting
 * values.
 *  They are only there for error reporting purposes.
 * XSD Type: MapiPropertyTypeType
 */
class MapiPropertyTypeType extends Enumeration
{

    const APPLICATION_TIME = 'ApplicationTime';

    const APPLICATION_TIME_ARRAY = 'ApplicationTimeArray';

    const BINARY = 'Binary';

    const BINARY_ARRAY = 'BinaryArray';

    const BOOLEAN = 'Boolean';

    const CLSID = 'CLSID';

    const CLSID_ARRAY = 'CLSIDArray';

    const CURRENCY = 'Currency';

    const CURRENCY_ARRAY = 'CurrencyArray';

    const DOUBLE = 'Double';

    const DOUBLE_ARRAY = 'DoubleArray';

    const ERROR = 'Error';

    const FLOAT = 'Float';

    const FLOAT_ARRAY = 'FloatArray';

    const INTEGER = 'Integer';

    const INTEGER_ARRAY = 'IntegerArray';

    const LONG = 'Long';

    const LONG_ARRAY = 'LongArray';

    const NULL_TYPE = 'Null';

    const OBJECT = 'Object';

    const OBJECT_ARRAY = 'ObjectArray';

    const SHORT = 'Short';

    const SHORT_ARRAY = 'ShortArray';

    const SYSTEM_TIME = 'SystemTime';

    const SYSTEM_TIME_ARRAY = 'SystemTimeArray';

    const STRING = 'String';

    const STRING_ARRAY = 'StringArray';

    const CLSIDARRAY = 'CLSIDArray';

    const NULL = 'Null';
}
