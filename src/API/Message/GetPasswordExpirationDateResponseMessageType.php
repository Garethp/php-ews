<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetPasswordExpirationDateResponseMessageType
 *
 *
 * XSD Type: GetPasswordExpirationDateResponseMessageType
 *
 * @method GetPasswordExpirationDateResponseMessageType setPasswordExpirationDate(\DateTime $passwordExpirationDate)
 */
class GetPasswordExpirationDateResponseMessageType extends ResponseMessageType
{

    /**
     * @var \DateTime
     */
    protected $passwordExpirationDate = null;

    protected $_typeMap = array(
        'passwordExpirationDate' => 'dateTime',
    );

    /**
     * @return \DateTime
     */
    public function getPasswordExpirationDate()
    {
        return $this->passwordExpirationDate;
    }
}
