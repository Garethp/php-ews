<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing EffectiveRightsType
 *
 *
 * XSD Type: EffectiveRightsType
 *
 * @method EffectiveRightsType setCreateAssociated(boolean $createAssociated)
 * @method EffectiveRightsType setCreateContents(boolean $createContents)
 * @method EffectiveRightsType setCreateHierarchy(boolean $createHierarchy)
 * @method EffectiveRightsType setDelete(boolean $delete)
 * @method EffectiveRightsType setModify(boolean $modify)
 * @method EffectiveRightsType setRead(boolean $read)
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
        return ((bool) $this->createAssociated);
    }

    /**
     * @return boolean
     */
    public function getCreateAssociated()
    {
        return $this->createAssociated;
    }

    /**
     * @returns bool
     */
    public function isCreateContents()
    {
        return ((bool) $this->createContents);
    }

    /**
     * @return boolean
     */
    public function getCreateContents()
    {
        return $this->createContents;
    }

    /**
     * @returns bool
     */
    public function isCreateHierarchy()
    {
        return ((bool) $this->createHierarchy);
    }

    /**
     * @return boolean
     */
    public function getCreateHierarchy()
    {
        return $this->createHierarchy;
    }

    /**
     * @returns bool
     */
    public function isDelete()
    {
        return ((bool) $this->delete);
    }

    /**
     * @return boolean
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * @returns bool
     */
    public function isModify()
    {
        return ((bool) $this->modify);
    }

    /**
     * @return boolean
     */
    public function getModify()
    {
        return $this->modify;
    }

    /**
     * @returns bool
     */
    public function isRead()
    {
        return ((bool) $this->read);
    }

    /**
     * @return boolean
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * @returns bool
     */
    public function isViewPrivateItems()
    {
        return ((bool) $this->viewPrivateItems);
    }

    /**
     * @return boolean
     */
    public function getViewPrivateItems()
    {
        return $this->viewPrivateItems;
    }
}
