<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing OccurrenceInfoType
 *
 *
 * XSD Type: OccurrenceInfoType
 *
 * @method OccurrenceInfoType setItemId(ItemIdType $itemId)
 * @method OccurrenceInfoType setStart(\DateTime $start)
 * @method OccurrenceInfoType setEnd(\DateTime $end)
 * @method OccurrenceInfoType setOriginalStart(\DateTime $originalStart)
 */
class OccurrenceInfoType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \DateTime
     */
    protected $start = null;

    protected $_typeMap = array(
        'start' => 'dateTime',
        'end' => 'dateTime',
        'originalStart' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $end = null;

    /**
     * @var \DateTime
     */
    protected $originalStart = null;

    /**
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @return \DateTime
     */
    public function getOriginalStart()
    {
        return $this->originalStart;
    }
}
