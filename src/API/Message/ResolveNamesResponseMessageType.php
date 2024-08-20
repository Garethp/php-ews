<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ResolveNamesResponseMessageType
 *
 *
 * XSD Type: ResolveNamesResponseMessageType
 *
 * @method ResolveNamesResponseMessageType setResolutionSet(\garethp\ews\API\Type\ArrayOfResolutionType $resolutionSet)
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
}
