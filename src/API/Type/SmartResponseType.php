<?php

namespace garethp\ews\API\Type;

/**
 * Class representing SmartResponseType
 *
 *
 * XSD Type: SmartResponseType
 *
 * @method SmartResponseType setNewBodyContent(BodyType $newBodyContent)
 */
class SmartResponseType extends SmartResponseBaseType
{

    /**
     * @var \garethp\ews\API\Type\BodyType
     */
    protected $newBodyContent = null;

    /**
     * @return BodyType
     */
    public function getNewBodyContent()
    {
        return $this->newBodyContent;
    }
}
