<?php

namespace garethp\ews\API\Type;

/**
 * Class representing AbsoluteDateTransitionType
 *
 *
 * XSD Type: AbsoluteDateTransitionType
 *
 * @method AbsoluteDateTransitionType setDateTime(\DateTime $dateTime)
 */
class AbsoluteDateTransitionType extends TransitionType
{

    /**
     * @var \DateTime
     */
    protected $dateTime = null;

    protected $_typeMap = array(
        'dateTime' => 'dateTime',
    );

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
}
