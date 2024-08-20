<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ResolveNamesType
 *
 *
 * XSD Type: ResolveNamesType
 *
 * @method ResolveNamesType setReturnFullContactData(boolean $returnFullContactData)
 * @method ResolveNamesType setSearchScope(string $searchScope)
 * @method ResolveNamesType setContactDataShape(string $contactDataShape)
 * @method ResolveNamesType setParentFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 * @method ResolveNamesType setUnresolvedEntry(string $unresolvedEntry)
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
     * @returns bool
     */
    public function isReturnFullContactData()
    {
        return ((bool) $this->returnFullContactData);
    }

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
}
