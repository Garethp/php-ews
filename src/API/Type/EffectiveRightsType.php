<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing EffectiveRightsType
 *
 *
 * XSD Type: EffectiveRightsType
 *
 * @method boolean getCreateAssociated()
 * @method EffectiveRightsType setCreateAssociated(boolean $createAssociated)
 * @method boolean getCreateContents()
 * @method EffectiveRightsType setCreateContents(boolean $createContents)
 * @method boolean getCreateHierarchy()
 * @method EffectiveRightsType setCreateHierarchy(boolean $createHierarchy)
 * @method boolean getDelete()
 * @method EffectiveRightsType setDelete(boolean $delete)
 * @method boolean getModify()
 * @method EffectiveRightsType setModify(boolean $modify)
 * @method boolean getRead()
 * @method EffectiveRightsType setRead(boolean $read)
 * @method boolean getViewPrivateItems()
 * @method EffectiveRightsType setViewPrivateItems(boolean $viewPrivateItems)
 */
class EffectiveRightsType extends Type
{

    /**
     * @var boolean
     */
    protected $createAssociated = null;

    /**
     * @var boolean
     */
    protected $createContents = null;

    /**
     * @var boolean
     */
    protected $createHierarchy = null;

    /**
     * @var boolean
     */
    protected $delete = null;

    /**
     * @var boolean
     */
    protected $modify = null;

    /**
     * @var boolean
     */
    protected $read = null;

    /**
     * @var boolean
     */
    protected $viewPrivateItems = null;

    /**
     * @returns bool
     */
    public function isCreateAssociated()
    {
        return $this->createAssociated && $this->createAssociated;
    }

    /**
     * @returns bool
     */
    public function isCreateContents()
    {
        return $this->createContents && $this->createContents;
    }

    /**
     * @returns bool
     */
    public function isCreateHierarchy()
    {
        return $this->createHierarchy && $this->createHierarchy;
    }

    /**
     * @returns bool
     */
    public function isDelete()
    {
        return $this->delete && $this->delete;
    }

    /**
     * @returns bool
     */
    public function isModify()
    {
        return $this->modify && $this->modify;
    }

    /**
     * @returns bool
     */
    public function isRead()
    {
        return $this->read && $this->read;
    }

    /**
     * @returns bool
     */
    public function isViewPrivateItems()
    {
        return $this->viewPrivateItems && $this->viewPrivateItems;
    }
}
