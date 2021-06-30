<?php
/**
 * Contains ExchangeWebServices.
 */


namespace garethp\ews\API;

use garethp\ews\API\Exception\ExchangeException;
use garethp\ews\API\Exception\NoResponseReturnedException;
use garethp\ews\API\Exception\ServiceUnavailableException;
use garethp\ews\API\Exception\UnauthorizedException;
use garethp\ews\API\ExchangeWebServices\MiddlewareFactory;
use garethp\ews\API\Message\ResponseMessageType;
use garethp\ews\API\Type\EmailAddressType;
use \Closure;

/**
 * Base class of the Exchange Web Services application.
 *
 *
 *
 * @package php-ews\Client
 *
 * @method Type AddDelegate($request)
 * @method Type ApplyConversationAction($request)
 * @method Type ConvertId($request)
 * @method Type CopyFolder($request)
 * @method Type CopyItem($request)
 * @method Type CreateAttachment($request)
 * @method Type CreateFolder($request)
 * @method Type CreateItem($request)
 * @method Type CreateManagedFolder($request)
 * @method Type CreateUserConfiguration($request)
 * @method Type DeleteAttachment($request)
 * @method Type DeleteFolder($request)
 * @method Type DeleteItem($request)
 * @method Type DeleteUserConfiguration($request)
 * @method Type DisconnectPhoneCall($request)
 * @method Type EmptyFolder($request)
 * @method Type ExpandDL($request)
 * @method Type ExportItems($request)
 * @method Type FindConversation($request)
 * @method Type FindFolder($request)
 * @method Type FindItem($request)
 * @method Type FindMessageTrackingReport($request)
 * @method Type GetAttachment($request)
 * @method Type GetDelegate($request)
 * @method Type GetEvents($request)
 * @method Type GetFolder($request)
 * @method Type GetInboxRules($request)
 * @method Type GetItem($request)
 * @method Type GetMailTips($request)
 * @method Type GetMessageTrackingReport($request)
 * @method Type GetPasswordExpirationDate($request)
 * @method Type GetPhoneCallInformation($request)
 * @method Type GetRoomLists($request)
 * @method Type GetRooms($request)
 * @method Type GetServerTimeZones($request)
 * @method Type GetServiceConfiguration($request)
 * @method Type GetSharingFolder($request)
 * @method Type GetSharingMetadata($request)
 * @method Type GetStreamingEvents($request)
 * @method Type GetUserAvailability($request)
 * @method Type GetUserConfiguration($request)
 * @method Type GetUserOofSettings($request)
 * @method Type MoveFolder($request)
 * @method Type MoveItem($request)
 * @method Type PlayOnPhone($request)
 * @method Type RefreshSharingFolder($request)
 * @method Type RemoveDelegate($request)
 * @method Type ResolveNames($request)
 * @method Type SendItem($request)
 * @method Type SetUserOofSettings($request)
 * @method Type Subscribe($request)
 * @method Type SyncFolderHierarchy($request)
 * @method Type SyncFolderItems($request)
 * @method Type Unsubscribe($request)
 * @method Type UpdateDelegate($request)
 * @method Type UpdateFolder($request)
 * @method Type UpdateInboxRules($request)
 * @method Type UpdateItem($request)
 * @method Type UpdateUserConfiguration($request)
 * @method Type UploadItems($request)
 */
class ExchangeWebServices
{
    const VERSION_2007 = 'Exchange2007';

    const VERSION_2007_SP1 = 'Exchange2007_SP1';

    const VERSION_2010 = 'Exchange2010';

    const VERSION_2010_SP1 = 'Exchange2010_SP1';

    const VERSION_2010_SP2 = 'Exchange2010_SP2';

    const VERSION_2013 = 'Exchange2013';

    const VERSION_2013_SP1 = 'Exchange2013_SP1';

    const VERSION_2016 = 'Exchange2016';

    /**
     * Password to use when connecting to the Exchange server.
     *
     * @var string
     */
    protected $password = null;

    /**
     * Location of the Exchange server.
     *
     * @var string
     */
    protected $server = null;

    /**
     * SOAP client used to make the request
     *
     * @var NTLMSoapClient
     */
    protected $soap = null;

    /**
     * Username to use when connecting to the Exchange server.
     *
     * @var string
     */
    protected $username = null;

    /**
     * @var EmailAddressType
     */
    protected $primarySmtpMailbox = null;

    /**
     * @var Callable[]
     */
    protected static $middlewareStack = false;

    /**
     * A setting to check whether or not responses should be drilled down before being
     * returned. Setting this to false
     * will return the raw responses without any filtering
     *
     * @var bool
     */
    protected $drillDownResponses = true;

    /**
     * Miscrosoft Exchange version that we are going to connect to
     *
     * @var string
     */
    protected $version = null;

    protected $options = null;

    /**
     * The timezone for the client
     *
     * @var bool
     */
    protected $timezone = false;

    /**
     * @return EmailAddressType
     */
    public function getPrimarySmtpMailbox()
    {
        return $this->primarySmtpMailbox;
    }

    public function getPrimarySmtpEmailAddress()
    {
        if ($this->primarySmtpMailbox == null) {
            return null;
        }

        return $this->primarySmtpMailbox->getEmailAddress();
    }

    public function setPrimarySmtpEmailAddress($emailAddress)
    {
        $mailbox = new EmailAddressType();
        $mailbox->setEmailAddress($emailAddress);
        $this->primarySmtpMailbox = $mailbox;

        return $this;
    }

    /**
     * @param boolean $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Constructor for the ExchangeWebServices class
     *
     * @param string $server
     * @param string $username
     * @param string $password
     * @param array $options
     */
    protected function __construct($server = null, $username = null, $password = null, $options = array())
    {
        if ($server !== null) {
            $this->createClient(
                $server,
                ExchangeWebServicesAuth::fromUsernameAndPassword($username, $password),
                $options
            );
        }

        $this->buildMiddlewareStack();
    }

    public static function fromUsernameAndPassword($server, $username, $password, $options)
    {
        $self = new self();
        $self->createClient($server, ExchangeWebServicesAuth::fromUsernameAndPassword($username, $password), $options);
        $self->options = $options;

        return $self;
    }

    public static function fromCallbackToken($server, $token, $options)
    {
        $self = new self();
        $self->createClient($server, ExchangeWebServicesAuth::fromCallbackToken($token), $options);
        $self->options = $options;

        return $self;
    }

    public static function fromCustomAuthentication($server, $authentication, $options)
    {
        $self = new self();
        $self->createClient($server, $authentication, $options);
        $self->options = $options;

        return $self;
    }

    protected function createClient($server, $auth, $options)
    {
        $location = 'https://' . $this->cleanServerUrl($server) . '/EWS/Exchange.asmx';

        $options = array_replace_recursive([
            'version' => self::VERSION_2007,
            'trace' => 1,
            'exceptions' => true,
            'classmap' => ClassMap::getClassMap(),
            'drillDownResponses' => true
        ], $options);

        $this->server = $server;
        $this->version = $options['version'];

        if (version_compare(PHP_VERSION, '8', '<')) {
            $backup = libxml_disable_entity_loader(false);
        }

        $this->soap = new NTLMSoapClient(
            $location,
            $auth,
            dirname(__FILE__) . '/../../Resources/wsdl/services.wsdl',
            $options
        );

        if (version_compare(PHP_VERSION, '8', '<')) {
            libxml_disable_entity_loader($backup);
        }

        if (isset($options['primarySmtpEmailAddress'])) {
            $this->setPrimarySmtpEmailAddress($options['primarySmtpEmailAddress']);
        }

        if (isset($options['impersonation'])) {
            $this->setPrimarySmtpEmailAddress($options['impersonation']);
        }

        $this->drillDownResponses = $options['drillDownResponses'];
    }

    /**
     * @codeCoverageIgnore
     *
     * @param $name
     * @param $arguments
     * @return Type
     * @throws \garethp\ews\API\Exception
     */
    public function __call($name, $arguments)
    {
        $request = MiddlewareRequest::newRequest($name, $arguments, $this->options);
        $response = $this->executeMiddlewareStack(self::$middlewareStack, $request);
        $response = $response->getResponse();
        return $response;
    }

    /**
     * Returns the SOAP Client that may be used to make calls against the server
     *
     * @return NTLMSoapClient
     */
    public function getClient()
    {
        return $this->soap;
    }

    /**
     * Cleans the server URL for usage
     *
     * @param $server
     * @return string
     */
    public function cleanServerUrl($server)
    {
        $url = parse_url($server);
        if (!isset($url['host']) && isset($url['path'])) {
            $url['host'] = $url['path'];
            unset($url['path']);
        }

        $server = $url['host'];
        if (isset($url['port'])) {
            $server .= ':' . $url['port'];
        }

        if (isset($url['path'])) {
            $server .= $url['path'];
        }

        $server = rtrim($server, "/");

        return $server;
    }

    /**
     * Process a response to verify that it succeeded and take the appropriate
     * action
     *
     * @param \garethp\ews\API\Message\BaseResponseMessageType $response
     * @return Type[]
     * @throws \garethp\ews\API\Exception
     */
    protected function processResponse($response)
    {
        // If the soap call failed then we need to thow an exception.
        $code = $this->getClient()->getResponseCode();
        $this->handleNonSuccessfulResponses($response, $code);

        if (!$this->drillDownResponses) {
            return $response;
        }

        if (!$response->exists('responseMessages')) {
            return $response;
        }

        $response = $response->getResponseMessages();
        $response = $this->drillDownResponseLevels($response);

        return $response;
    }

    /**
     * @param $response
     * @return array
     * @throws \garethp\ews\API\Exception
     */
    public static function drillDownResponseLevels($response)
    {
        $items = self::getItemsFromResponse($response);

        if (count($items) === 1) {
            reset($items);
            $key = key($items);
            $methodName = "get$key";
            $response = $response->$methodName();

            return self::drillDownResponseLevels($response);
        }

        if (is_array($items) && isset($items[1]) && $items[1] instanceof Message\ResponseMessageType) {
            return array_map(function ($responseItem) {
                return self::drillDownResponseLevels($responseItem);
            }, $items);
        }

        return $response;
    }

    /**
     * @param $response
     * @return array
     * @throws ExchangeException
     */
    protected static function getItemsFromResponse($response)
    {
        $items = array();
        if ($response instanceof Type) {
            $items = $response->getNonNullItems();
        }

        if (is_array($response)) {
            $items = $response;
        }

        if ($response instanceof Message\ResponseMessageType) {
            if ($response->getResponseClass() !== "Success") {
                throw new ExchangeException($response);
            }

            unset($items['responseClass']);
            unset($items['responseCode']);
        }

        return $items;
    }

    /**
     * @param Message\BaseResponseMessageType $response
     * @param $code
     * @throws ExchangeException
     * @throws NoResponseReturnedException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     */
    protected function handleNonSuccessfulResponses($response, $code)
    {
        if ($code == 401) {
            throw new UnauthorizedException();
        }

        if ($code == 503) {
            throw new ServiceUnavailableException();
        }

        if ($code >= 300) {
            $response = new ResponseMessageType();
            $response->setMessageText('SOAP client returned status of ' . $code);

            throw new ExchangeException($response, $code);
        }

        if (empty($response) || empty($response->getNonNullResponseMessages())) {
            throw new NoResponseReturnedException();
        }
    }

    protected function buildMiddlewareStack()
    {
        if (self::$middlewareStack === false) {
            $factory = new MiddlewareFactory();

            self::$middlewareStack = [
                //Make the actual SOAP call
                $factory->getSoapCall(),

                //Transform an object of type Type to an XML Object
                $factory->getTypeToXMLObject(),

                //The SyncScope option isn't available for Exchange 2007 SP1 and below
                $factory->getStripSyncScopeForExchange2007(),

                //Add response processing
                $factory->getProcessResponse(),

                //Adds last request to FindFolder and FindItem responses
                $factory->getAddLastRequestToPagedResults()
            ];
        }
    }

    /**
     * @param array $middlewareStack
     * @param MiddlewareRequest $request
     * @return MiddlewareResponse
     */
    protected function executeMiddlewareStack(array $middlewareStack, MiddlewareRequest $request)
    {
        $newStack = [];
        foreach ($middlewareStack as $key => $current) {
            /** @var $current callable */
            $last = function () {
            };

            if ($key != 0) {
                $last = $newStack[$key - 1];
            }

            $current = Closure::bind($current, $this, $this);
            $newStack[] = function (MiddlewareRequest $request) use ($current, $last) {
                return $current($request, $last);
            };
        }

        /** @var $newStack callable[] */
        $newStack = array_reverse($newStack);

        $top = $newStack[0];

        /** @var $top callable */
        return $top($request);
    }
}
