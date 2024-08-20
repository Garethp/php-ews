<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ModifiedEventType
 *
 *
 * XSD Type: ModifiedEventType
 *
 * @method ModifiedEventType setUnreadCount(integer $unreadCount)
 */
class ModifiedEventType extends BaseObjectChangedEventType
{

    /**
     * @var integer
     */
    protected $unreadCount = null;

    /**
     * @return integer
     */
    public function getUnreadCount()
    {
        return $this->unreadCount;
    }
}
