<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateItemResponseMessageType
 *
 *
 * XSD Type: UpdateItemResponseMessageType
 *
 * @method UpdateItemResponseMessageType setConflictResults(\garethp\ews\API\Type\ConflictResultsType $conflictResults)
 */
class UpdateItemResponseMessageType extends ItemInfoResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ConflictResultsType
     */
    protected $conflictResults = null;

    /**
     * @return \garethp\ews\API\Type\ConflictResultsType
     */
    public function getConflictResults()
    {
        return $this->conflictResults;
    }
}
