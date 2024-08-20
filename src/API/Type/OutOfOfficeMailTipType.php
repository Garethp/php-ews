<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing OutOfOfficeMailTipType
 *
 *
 * XSD Type: OutOfOfficeMailTip
 *
 * @method OutOfOfficeMailTipType setReplyBody(ReplyBodyType $replyBody)
 * @method OutOfOfficeMailTipType setDuration(DurationType $duration)
 */
class OutOfOfficeMailTipType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ReplyBodyType
     */
    protected $replyBody = null;

    /**
     * @var \garethp\ews\API\Type\DurationType
     */
    protected $duration = null;

    /**
     * @return ReplyBodyType
     */
    public function getReplyBody()
    {
        return $this->replyBody;
    }

    /**
     * @return DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }
}
