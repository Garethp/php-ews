<?php


namespace garethp\ews\Generator;

use Laminas\Code\Generator\DocBlock\Tag\MethodTag;

class MethodWIthRequestTag extends MethodTag
{
    /**
     * @return string
     */
    public function generate()
    {
        $output = '@method'
            . (($this->isStatic) ? ' static' : '')
            . ((!empty($this->types)) ? ' ' . $this->getTypesAsString() : '')
            . ((!empty($this->methodName)) ? ' ' . $this->methodName . '($request)' : '')
            . ((!empty($this->description)) ? ' ' . $this->description : '');

        return $output;
    }
}
