<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing BaseNotificationEventType
 *
 *
 * XSD Type: BaseNotificationEventType
 *
 * @method BaseNotificationEventType setWatermark(string $watermark)
 */
class BaseNotificationEventType extends Type
{

    /**
     * @var string
     */
    protected $watermark = null;

    /**
     * @return string
     */
    public function getWatermark()
    {
        return $this->watermark;
    }
}
