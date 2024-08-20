<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindConversationResponseMessageType
 *
 *
 * XSD Type: FindConversationResponseMessageType
 *
 * @method FindConversationResponseMessageType addConversations(\garethp\ews\API\Type\ConversationType $conversations)
 * @method FindConversationResponseMessageType setConversations(array $conversations)
 */
class FindConversationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ConversationType[]
     */
    protected $conversations = null;

    /**
     * @return \garethp\ews\API\Type\ConversationType[]
     */
    public function getConversations()
    {
        return $this->conversations;
    }
}
