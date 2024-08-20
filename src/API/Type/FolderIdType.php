<?php

namespace garethp\ews\API\Type;

/**
 * Class representing FolderIdType
 *
 * Identifier for a fully resolved folder
 * XSD Type: FolderIdType
 *
 * @method FolderIdType setId(string $id)
 * @method FolderIdType setChangeKey(string $changeKey)
 */
class FolderIdType extends BaseFolderIdType
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

    public function toArray($getOuterArray = false)
    {
        $id = [ 'Id' => $this->id, 'ChangeKey' => $this->changeKey ];

        if ($getOuterArray === true) {
            return ['FolderId' => $id];
        }

        return $id;
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
