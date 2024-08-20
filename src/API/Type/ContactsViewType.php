<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ContactsViewType
 *
 *
 * XSD Type: ContactsViewType
 *
 * @method ContactsViewType setInitialName(string $initialName)
 * @method ContactsViewType setFinalName(string $finalName)
 */
class ContactsViewType extends BasePagingType
{

    /**
     * @var string
     */
    protected $initialName = null;

    /**
     * @var string
     */
    protected $finalName = null;

    /**
     * @return string
     */
    public function getInitialName()
    {
        return $this->initialName;
    }

    /**
     * @return string
     */
    public function getFinalName()
    {
        return $this->finalName;
    }
}
