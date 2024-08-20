<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ConvertIdType
 *
 * Converts the passed source ids into the destination format. Change keys are not
 *  returned.
 * XSD Type: ConvertIdType
 *
 * @method ConvertIdType setDestinationFormat(string $destinationFormat)
 * @method ConvertIdType setSourceIds(\garethp\ews\API\Type\NonEmptyArrayOfAlternateIdsType $sourceIds)
 */
class ConvertIdType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $destinationFormat = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfAlternateIdsType
     */
    protected $sourceIds = null;

    /**
     * @return string
     */
    public function getDestinationFormat()
    {
        return $this->destinationFormat;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfAlternateIdsType
     */
    public function getSourceIds()
    {
        return $this->sourceIds;
    }
}
