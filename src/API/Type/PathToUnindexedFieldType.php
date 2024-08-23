<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PathToUnindexedFieldType
 *
 *
 * XSD Type: PathToUnindexedFieldType
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PathToUnindexedFieldType
     */
    public function setFieldURI($value)
    {
        $this->fieldURI = $this->castValueIfNeeded("fieldURI", $value);
        return $this;
    }
}
