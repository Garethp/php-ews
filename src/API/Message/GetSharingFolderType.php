<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetSharingFolderType
 *
 *
 * XSD Type: GetSharingFolderType
 *
 * @method GetSharingFolderType setSmtpAddress(string $smtpAddress)
 * @method GetSharingFolderType setDataType(string $dataType)
 * @method GetSharingFolderType setSharedFolderId(string $sharedFolderId)
 */
class GetSharingFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $smtpAddress = null;

    /**
     * @var string
     */
    protected $dataType = null;

    /**
     * @var string
     */
    protected $sharedFolderId = null;

    /**
     * @return string
     */
    public function getSmtpAddress()
    {
        return $this->smtpAddress;
    }

    /**
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @return string
     */
    public function getSharedFolderId()
    {
        return $this->sharedFolderId;
    }
}
