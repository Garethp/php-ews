<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ItemIdType
 *
 * Identifier for a fully resolved item
 * XSD Type: ItemIdType
 *
 * @method ItemIdType setId(string $id)
 * @method ItemIdType setChangeKey(string $changeKey)
 */
class ItemIdType extends BaseItemIdType
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $changeKey = null;

    public function __construct($id = null, $changeKey = null)
    {
        $this->id = $id;
        $this->changeKey = $changeKey;
    }

    public function toArray()
    {
        return ['Id' => $this->id, 'ChangeKey' => $this->changeKey ];
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getChangeKey()
    {
        return $this->changeKey;
    }
}
