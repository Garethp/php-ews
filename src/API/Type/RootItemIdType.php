<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RootItemIdType
 *
 *
 * XSD Type: RootItemIdType
 *
 * @method RootItemIdType setRootItemId(string $rootItemId)
 * @method RootItemIdType setRootItemChangeKey(string $rootItemChangeKey)
 */
class RootItemIdType extends BaseItemIdType
{

    /**
     * @var string
     */
    protected $rootItemId = null;

    /**
     * @var string
     */
    protected $rootItemChangeKey = null;

    /**
     * @return string
     */
    public function getRootItemId()
    {
        return $this->rootItemId;
    }

    /**
     * @return string
     */
    public function getRootItemChangeKey()
    {
        return $this->rootItemChangeKey;
    }
}
