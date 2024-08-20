<?php

namespace garethp\ews\API\Type;

/**
 * Class representing DistinguishedFolderIdType
 *
 * Identifier for a distinguished folder
 * XSD Type: DistinguishedFolderIdType
 *
 * @method DistinguishedFolderIdType setId(string $id)
 * @method DistinguishedFolderIdType setChangeKey(string $changeKey)
 * @method DistinguishedFolderIdType setMailbox(EmailAddressType $mailbox)
 */
class DistinguishedFolderIdType extends BaseFolderIdType
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $changeKey = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    public function __construct($id = null, $changeKey = null, EmailAddressType $mailbox = null)
    {
        $this->id = $id;
        $this->changeKey = $changeKey;
        $this->mailbox = $mailbox;
    }

    public function toArray($getOuterArray = false)
    {
        $id = [ 'Id' => $this->id, 'ChangeKey' => $this->changeKey ];

        if ($getOuterArray === true) {
            return ['DistinguishedFolderId' => $id];
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

    /**
     * @return EmailAddressType
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }
}
