<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetSharingMetadataType
 *
 *
 * XSD Type: GetSharingMetadataType
 *
 * @method GetSharingMetadataType setIdOfFolderToShare(\garethp\ews\API\Type\FolderIdType $idOfFolderToShare)
 * @method GetSharingMetadataType setSenderSmtpAddress(string $senderSmtpAddress)
 * @method GetSharingMetadataType addRecipients(string $recipients)
 * @method GetSharingMetadataType setRecipients(array $recipients)
 */
class GetSharingMetadataType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $idOfFolderToShare = null;

    /**
     * @var string
     */
    protected $senderSmtpAddress = null;

    /**
     * @var string[]
     */
    protected $recipients = null;

    /**
     * @return \garethp\ews\API\Type\FolderIdType
     */
    public function getIdOfFolderToShare()
    {
        return $this->idOfFolderToShare;
    }

    /**
     * @return string
     */
    public function getSenderSmtpAddress()
    {
        return $this->senderSmtpAddress;
    }

    /**
     * @return string[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }
}
