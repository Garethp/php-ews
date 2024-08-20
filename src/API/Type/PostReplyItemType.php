<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PostReplyItemType
 *
 *
 * XSD Type: PostReplyItemType
 *
 * @method PostReplyItemType setNewBodyContent(BodyType $newBodyContent)
 */
class PostReplyItemType extends PostReplyItemBaseType
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
