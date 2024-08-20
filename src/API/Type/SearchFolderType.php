<?php

namespace garethp\ews\API\Type;

/**
 * Class representing SearchFolderType
 *
 *
 * XSD Type: SearchFolderType
 *
 * @method SearchFolderType setSearchParameters(SearchParametersType $searchParameters)
 */
class SearchFolderType extends FolderType
{

    /**
     * @var \garethp\ews\API\Type\SearchParametersType
     */
    protected $searchParameters = null;

    /**
     * @return SearchParametersType
     */
    public function getSearchParameters()
    {
        return $this->searchParameters;
    }
}
