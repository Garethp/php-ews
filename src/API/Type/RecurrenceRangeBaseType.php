<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RecurrenceRangeBaseType
 *
 *
 * XSD Type: RecurrenceRangeBaseType
 *
 * @method RecurrenceRangeBaseType setStartDate(\DateTime $startDate)
 */
class RecurrenceRangeBaseType extends Type
{

    /**
     * @var \DateTime
     */
    protected $startDate = null;

    protected $_typeMap = array(
        'startDate' => 'date',
    );

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
}
