<?php
/**
 * Created by PhpStorm.
 * User: true
 * Date: 29-6-15
 * Time: 10:16
 */

namespace garethp\ews\Test\API;

use garethp\ews\API\ExchangeWebServices;
use garethp\ews\API\Type;
use Mockery;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class ExchangeWebServicesTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    public function getClientMock()
    {
        $mock = Mockery::mock('garethp\ews\API\ExchangeWebServices')->shouldDeferMissing();

        return $mock;
    }

    #[DataProvider('cleanServerUrlProvider')]
    public function testCleanServerUrl($input, $expected)
    {
        $client = $this->getClientMock();
        $actual = $client->cleanServerUrl($input);

        $this->assertEquals($expected, $actual);
    }

    public function testPrimarySmtpMailbox()
    {
        $client = $this->getClientMock();
        $this->assertNull($client->getPrimarySmtpMailbox());
        $this->assertNull($client->getPrimarySmtpEmailAddress());

        $expectedMailbox = new Type\EmailAddressType();
        $expectedMailbox->setEmailAddress('test@test.com');
        $client->setPrimarySmtpEmailAddress('test@test.com');

        $this->assertEquals($client->getPrimarySmtpMailbox(), $expectedMailbox);
        $this->assertEquals($client->getPrimarySmtpEmailAddress(), 'test@test.com');

        $client = ExchangeWebServices::fromUsernameAndPassword('test@test.com', 'user', 'password', [
            'primarySmtpEmailAddress' => 'test@test.com'
        ]);

        $this->assertEquals($client->getPrimarySmtpMailbox(), $expectedMailbox);
        $this->assertEquals($client->getPrimarySmtpEmailAddress(), 'test@test.com');

        $client = ExchangeWebServices::fromUsernameAndPassword('test@test.com', 'user', 'password', [
            'impersonation' => 'test@test.com'
        ]);

        $this->assertEquals($client->getPrimarySmtpMailbox(), $expectedMailbox);
        $this->assertEquals($client->getPrimarySmtpEmailAddress(), 'test@test.com');
    }

    public static function cleanServerUrlProvider()
    {
        return array(
            array('test.com', 'test.com'),
            array('test.com/', 'test.com'),
            array('https://test.com', 'test.com'),
            array('https://test.com/', 'test.com'),
            array('https://test.com/ews/', 'test.com/ews'),
            array('https://test.com:9000/ews', 'test.com:9000/ews'),
            array('https://user:pass@test.com:9000/ews', 'test.com:9000/ews')
        );
    }

    public function processResponseFailProvider()
    {
        $secondResponse = array(
            'ResponseMessages' => array(
                'Message' => array(
                    'ResponseClass' => 'Error',
                    'MessageText' => 'Some Text'
                )
            )
        );

        $secondResponse = json_decode(json_encode($secondResponse), false);

        return array(
            array(false),
            array($secondResponse)
        );
    }
}
