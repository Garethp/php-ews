<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ResolveNamesResponseMessageType
 *
 *
 * XSD Type: ResolveNamesResponseMessageType
 */
class ResolveNamesResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ArrayOfResolutionType
     */
    protected $resolutionSet = null;

    /**
     * @return \garethp\ews\API\Type\ArrayOfResolutionType
     */
    public function getResolutionSet()
    {
        return $this->resolutionSet;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\ArrayOfResolutionType
     * @return ResolveNamesResponseMessageType
     */
    public function setResolutionSet(\garethp\ews\API\Type\ArrayOfResolutionType $value)
    {
        $this->resolutionSet = $this->castValueIfNeeded("resolutionSet", $value);
        return $this;
    }
}
