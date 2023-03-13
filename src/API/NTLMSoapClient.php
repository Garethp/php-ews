<?php

namespace garethp\ews\API;

use garethp\ews\API\Type\ExchangeImpersonation;
use SoapClient;
use SoapHeader;
use garethp\HttpPlayback\Factory;

/**
 * Contains NTLMSoapClient.
 */

/**
 * Soap Client using Microsoft's NTLM Authentication.
 *
 * Copyright (c) 2008 Invest-In-France Agency http://www.invest-in-france.org
 *
 * Author : Thomas Rabaix
 *
 * Permission to use, copy, modify, and distribute this software for any
 * purpose with or without fee is hereby granted, provided that the above
 * copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
 * WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
 * ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
 * WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
 * ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
 * OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
 *
 * @link http://rabaix.net/en/articles/2008/03/13/using-soap-php-with-ntlm-authentication
 * @author Thomas Rabaix
 *
 * @package php-ews\Auth
 *
 * @property array __default_headers
 */
class NTLMSoapClient extends SoapClient
{
    /**
     * Username for authentication on the exchnage server
     *
     * @var string
     */
    protected $user;

    /**
     * Password for authentication on the exchnage server
     *
     * @var string
     */
    protected $password;

    /**
     * Whether or not to validate ssl certificates
     *
     * @var boolean
     */
    protected $validate = false;

    private $httpClient;

    protected $__last_request_headers;

    protected $_responseCode;

    /**
     * An array of headers for us to store or use. Since not all requests use all headers (DeleteItem and SyncItems
     * don't allow you to pass a Timezone for example), we need to be able to smartly decide what headers to include
     * and exclude from a request. Until we have propper selection (an array of all known operations and what headers
     * are allowed for example), this seems like a decent solution for storing the headers before we decide if they
     * belong in the request or not)
     *
     * @var array
     */
    protected $ewsHeaders = array(
        'version' => null,
        'impersonation' => null,
        'timezone' => null
    );

    protected $auth;

    protected $callsWithoutTimezone = array(
        'DeleteItem',
        'SyncFolderItems',
        'GetServerTimeZones',
        'ConvertId',
        'MoveItem'
    );

    /**
     * @TODO: Make this smarter. It should know and search what headers to remove on what actions
     *
     * @param string $name
     * @param string $args
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function __call($name, $args)
    {
        $this->__setSoapHeaders(null);

        $headers = array(
            $this->ewsHeaders['version'],
            $this->ewsHeaders['impersonation'],
        );

        if (!in_array($name, $this->callsWithoutTimezone)) {
            $headers[] = $this->ewsHeaders['timezone'];
        }

        $headers = array_filter($headers, function ($header) {
            return $header instanceof SoapHeader;
        });

        $this->__setSoapHeaders($headers);
        return parent::__call($name, $args);
    }

    /**
     * @param string $location
     * @param string $wsdl
     * @param array $options
     */
    public function __construct($location, $auth, $wsdl, $options = array())
    {
        $this->auth = $auth;

        $options = array_replace_recursive([
            'httpPlayback' => [
                'mode' => null
            ]
        ], $options);

        $options['location'] = $location;

        // If a version was set then add it to the headers.
        if (!empty($options['version'])) {
            $this->ewsHeaders['version'] = new SoapHeader(
                'http://schemas.microsoft.com/exchange/services/2006/types',
                'RequestServerVersion Version="'.$options['version'].'"'
            );
        }

        // If impersonation was set then add it to the headers.
        if (!empty($options['impersonation'])) {
            $impersonation = $options['impersonation'];
            if (is_string($impersonation)) {
                $impersonation = ExchangeImpersonation::fromEmailAddress($options['impersonation']);
            }

            $this->ewsHeaders['impersonation'] = new SoapHeader(
                'http://schemas.microsoft.com/exchange/services/2006/types',
                'ExchangeImpersonation',
                $impersonation->toXmlObject()
            );
        }

        if (!empty($options['timezone'])) {
            $this->ewsHeaders['timezone'] = new SoapHeader(
                'http://schemas.microsoft.com/exchange/services/2006/types',
                'TimeZoneContext',
                array(
                    'TimeZoneDefinition' => array(
                        'Id' => $options['timezone']
                    )
                )
            );
        }

        $this->httpClient = Factory::getInstance($options['httpPlayback']);

        parent::__construct($wsdl, $options);
    }

    /**
     * Performs a SOAP request
     *
     * @link http://php.net/manual/en/function.soap-soapclient-dorequest.php
     *
     * @param string $request the xml soap request
     * @param string $location the url to request
     * @param string $action the soap action.
     * @param integer $version the soap version
     * @param integer $one_way
     * @return string the xml soap response.
     */
    #[\ReturnTypeWillChange]
    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        $postOptions = array(
            'body' => $request,
            'headers' => array(
                'Connection' => 'Keep-Alive',
                'User-Agent' => 'PHP-SOAP-CURL',
                'Content-Type' => 'text/xml; charset=utf-8',
                'SOAPAction' => $action
            ),
            'verify' => $this->validate,
            'http_errors' => false
        );

        $postOptions = array_replace_recursive($postOptions, $this->auth);

        $response = $this->httpClient->post($location, $postOptions);

        $this->__last_request_headers = $postOptions['headers'];
        $this->_responseCode = $response->getStatusCode();

        $responseStr = $response->getBody()->__toString();
        if ($this->_responseCode < 200 || $this->_responseCode >= 300) {
            return $responseStr;
        }

        libxml_use_internal_errors(true);
        $dom = new \DOMDocument("1.0", "UTF-8");
        $dom->strictErrorChecking = false;
        $dom->validateOnParse = false;
        $dom->recover = true;
        $dom->loadXML($responseStr);
        $xml = simplexml_import_dom($dom);
        libxml_clear_errors();
        libxml_use_internal_errors(false);

        return $xml->asXML();
    }

    /**
     * Returns last SOAP request headers
     *
     * @link http://php.net/manual/en/function.soap-soapclient-getlastrequestheaders.php
     *
     * @return string the last soap request headers
     */
    #[\ReturnTypeWillChange]
    public function __getLastRequestHeaders()
    {
        return implode('n', $this->__last_request_headers)."\n";
    }

    /**
     * Set validation certificate
     *
     * @param bool $validate
     * @return $this
     */
    public function validateCertificate($validate = true)
    {
        $this->validate = $validate;

        return $this;
    }

    /**
     * Returns the response code from the last request
     *
     * @return integer
     */
    public function getResponseCode()
    {
        return $this->_responseCode;
    }
}
