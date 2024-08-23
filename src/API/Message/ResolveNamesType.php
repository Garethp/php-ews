<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ResolveNamesType
 *
 *
 * XSD Type: ResolveNamesType
 */
class ResolveNamesType extends BaseRequestType
{

    /**
     * @var boolean
     */
    protected $returnFullContactData = null;

    /**
     * @var string
     */
    protected $searchScope = null;

    /**
     * @var string
     */
    protected $contactDataShape = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $parentFolderIds = null;

    /**
     * @var string
     */
    protected $unresolvedEntry = null;

    /**
     * @return boolean
     */
    public function getReturnFullContactData()
    {
        return $this->returnFullContactData;
    }

    /**
     * @return string
     */
    public function getSearchScope()
    {
        return $this->searchScope;
    }

    /**
     * @return string
     */
    public function getContactDataShape()
    {
        return $this->contactDataShape;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    public function getParentFolderIds()
    {
        return $this->parentFolderIds;
    }

    /**
     * @return string
     */
    public function getUnresolvedEntry()
    {
        return $this->unresolvedEntry;
    }

    /**
     * @returns bool
     */
    public function isReturnFullContactData()
    {
        return ((bool) $this->returnFullContactData);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ResolveNamesType
     */
    public function setReturnFullContactData($value)
    {
        $this->returnFullContactData = $this->castValueIfNeeded("returnFullContactData", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ResolveNamesType
     */
    public function setSearchScope($value)
    {
        $this->searchScope = $this->castValueIfNeeded("searchScope", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ResolveNamesType
     */
    public function setContactDataShape($value)
    {
        $this->contactDataShape = $this->castValueIfNeeded("contactDataShape", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     * @return ResolveNamesType
     */
    public function setParentFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $value)
    {
        $this->parentFolderIds = $this->castValueIfNeeded("parentFolderIds", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ResolveNamesType
     */
    public function setUnresolvedEntry($value)
    {
        $this->unresolvedEntry = $this->castValueIfNeeded("unresolvedEntry", $value);
        return $this;
    }
}
