<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ReplyBodyType
 *
 *
 * XSD Type: ReplyBody
 *
 * @method ReplyBodyType setLang(\garethp\ews\API\Type\ReplyBodyType\LangAType $lang)
 * @method ReplyBodyType setMessage(string $message)
 */
class ReplyBodyType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ReplyBodyType\LangAType
     */
    protected $lang = null;

    /**
     * @var string
     */
    protected $message = null;

    /**
     * @return \garethp\ews\API\Type\ReplyBodyType\LangAType
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}
