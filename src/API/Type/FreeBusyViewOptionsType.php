<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FreeBusyViewOptionsType
 *
 *
 * XSD Type: FreeBusyViewOptionsType
 *
 * @method FreeBusyViewOptionsType setTimeWindow(DurationType $timeWindow)
 * @method FreeBusyViewOptionsType setMergedFreeBusyIntervalInMinutes(integer $mergedFreeBusyIntervalInMinutes)
 * @method FreeBusyViewOptionsType addRequestedView(string $requestedView)
 * @method FreeBusyViewOptionsType setRequestedView(array $requestedView)
 */
class FreeBusyViewOptionsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\DurationType
     */
    protected $timeWindow = null;

    /**
     * @var integer
     */
    protected $mergedFreeBusyIntervalInMinutes = null;

    /**
     * @var string[]
     */
    protected $requestedView = null;

    /**
     * @return DurationType
     */
    public function getTimeWindow()
    {
        return $this->timeWindow;
    }

    /**
     * @return integer
     */
    public function getMergedFreeBusyIntervalInMinutes()
    {
        return $this->mergedFreeBusyIntervalInMinutes;
    }

    /**
     * @return string[]
     */
    public function getRequestedView()
    {
        return $this->requestedView;
    }
}
