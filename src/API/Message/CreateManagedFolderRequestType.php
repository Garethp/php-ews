<?php

namespace garethp\ews\API\Message;

/**
 * Class representing CreateManagedFolderRequestType
 *
 *
 * XSD Type: CreateManagedFolderRequestType
 *
 * @method CreateManagedFolderRequestType addFolderNames(string $folderNames)
 * @method CreateManagedFolderRequestType setFolderNames(array $folderNames)
 * @method CreateManagedFolderRequestType setMailbox(\garethp\ews\API\Type\EmailAddressType $mailbox)
 */
class CreateManagedFolderRequestType extends BaseRequestType
{

    /**
     * @var string[]
     */
    protected $folderNames = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @return string[]
     */
    public function getFolderNames()
    {
        return $this->folderNames;
    }

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }
}
