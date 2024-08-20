<?php

namespace garethp\ews\API\Type;

/**
 * Class representing EndDateRecurrenceRangeType
 *
 *
 * XSD Type: EndDateRecurrenceRangeType
 *
 * @method EndDateRecurrenceRangeType setEndDate(\DateTime $endDate)
 */
class EndDateRecurrenceRangeType extends RecurrenceRangeBaseType
{

    /**
     * @var \DateTime
     */
    protected $endDate = null;

    protected $_typeMap = array(
        'endDate' => 'date',
    );

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
}
