<?php


namespace garethp\ews\Generator;

use Laminas\Code\Generator\DocBlock\Tag\AbstractTypeableTag;
use Laminas\Code\Generator\DocBlock\Tag\TagInterface;

class EmptyDocblockTag extends AbstractTypeableTag implements TagInterface
{
    public function generate()
    {
        return "";
    }

    public function getName()
    {
        return "";
    }
}
