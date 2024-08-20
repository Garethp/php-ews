<?php

namespace garethp\ews\API\Type;

/**
 * Class representing CalendarViewType
 *
 *
 * XSD Type: CalendarViewType
 *
 * @method CalendarViewType setStartDate(\DateTime $startDate)
 * @method CalendarViewType setEndDate(\DateTime $endDate)
 */
class CalendarViewType extends BasePagingType
{

    /**
     * @var \DateTime
     */
    protected $startDate = null;

    protected $_typeMap = array(
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $endDate = null;

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
}
