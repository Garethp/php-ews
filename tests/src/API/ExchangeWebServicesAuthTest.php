<?php

namespace garethp\ews\Test\API;

use garethp\ews\API\ExchangeWebServicesAuth;
use garethp\ews\API\Type;
use Mockery;
use PHPUnit\Framework\TestCase;

class ExchangeWebServicesAuthTest extends TestCase
{
    public function testFromUsernameAndPassword()
    {
        $expected = array(
            'curl' => array(
                CURLOPT_HTTPAUTH => CURLAUTH_BASIC | CURLAUTH_NTLM,
                CURLOPT_USERPWD => 'testUser' . ':' . 'testPassword'
            )
        );

        $this->assertEquals($expected, ExchangeWebServicesAuth::fromUsernameAndPassword('testUser', 'testPassword'));
    }
}
