<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PathToUnindexedFieldType
 *
 *
 * XSD Type: PathToUnindexedFieldType
 *
 * @method PathToUnindexedFieldType setFieldURI(string $fieldURI)
 */
class PathToUnindexedFieldType extends BasePathToElementType
{

    /**
     * @var string
     */
    protected $fieldURI = null;

    /**
     * @return string
     */
    public function getFieldURI()
    {
        return $this->fieldURI;
    }
}
