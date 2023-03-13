<?php
/**
 * Created by PhpStorm.
 * User: true
 * Date: 25-6-15
 * Time: 17:23
 */

namespace garethp\ews\Test\API;

use garethp\ews\Test\BaseTestCase;
use garethp\ews\API\NTLMSoapClient;
use ReflectionClass;
use Mockery;
use garethp\ews\API;

class NTLMSoapClientTest extends BaseTestCase
{
    public function getClientMock()
    {
        $mock = Mockery::mock('garethp\ews\API\NTLMSoapClient')->shouldDeferMissing();

        return $mock;
    }

    public function testValidateCertificate()
    {
        $reflection = new ReflectionClass('\garethp\ews\API\NTLMSoapClient');
        $prop = $reflection->getProperty('validate');
        $prop->setAccessible(true);

        $client = new NTLMSoapClient(
            'location',
            API\ExchangeWebServicesAuth::fromUsernameAndPassword('user', 'password'),
            __DIR__ . '/../../../Resources/wsdl/services.wsdl'
        );

        $this->assertFalse($prop->getValue($client));

        $client->validateCertificate(true);
        $this->assertTrue($prop->getValue($client));

        $client->validateCertificate(false);
        $this->assertFalse($prop->getValue($client));
    }
}
