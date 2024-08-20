<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing EncryptedSharedFolderDataType
 *
 *
 * XSD Type: EncryptedSharedFolderDataType
 *
 * @method EncryptedSharedFolderDataType setToken(EncryptedDataContainerType $token)
 * @method EncryptedSharedFolderDataType setData(EncryptedDataContainerType $data)
 */
class EncryptedSharedFolderDataType extends Type
{

    /**
     * @var \garethp\ews\API\Type\EncryptedDataContainerType
     */
    protected $token = null;

    /**
     * @var \garethp\ews\API\Type\EncryptedDataContainerType
     */
    protected $data = null;

    /**
     * @return EncryptedDataContainerType
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return EncryptedDataContainerType
     */
    public function getData()
    {
        return $this->data;
    }
}
