<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetSharingMetadataResponseMessageType
 *
 *
 * XSD Type: GetSharingMetadataResponseMessageType
 *
 * @method GetSharingMetadataResponseMessageType addEncryptedSharedFolderDataCollection(\garethp\ews\API\Type\EncryptedSharedFolderDataType $encryptedSharedFolderDataCollection)
 * @method GetSharingMetadataResponseMessageType setEncryptedSharedFolderDataCollection(array $encryptedSharedFolderDataCollection)
 * @method GetSharingMetadataResponseMessageType addInvalidRecipients(\garethp\ews\API\Type\InvalidRecipientType $invalidRecipients)
 * @method GetSharingMetadataResponseMessageType setInvalidRecipients(array $invalidRecipients)
 */
class GetSharingMetadataResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\EncryptedSharedFolderDataType[]
     */
    protected $encryptedSharedFolderDataCollection = null;

    /**
     * @var \garethp\ews\API\Type\InvalidRecipientType[]
     */
    protected $invalidRecipients = null;

    /**
     * @return \garethp\ews\API\Type\EncryptedSharedFolderDataType[]
     */
    public function getEncryptedSharedFolderDataCollection()
    {
        return $this->encryptedSharedFolderDataCollection;
    }

    /**
     * @return \garethp\ews\API\Type\InvalidRecipientType[]
     */
    public function getInvalidRecipients()
    {
        return $this->invalidRecipients;
    }
}
