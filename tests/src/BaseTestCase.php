<?php

namespace garethp\ews\Test;

use garethp\ews\API;
use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
    /**
     * @param null $apiClass
     * @return API
     */
    public function getClient($apiClass = null)
    {
        if (!$apiClass) {
            $apiClass = API::class;
        }

        $mode = getenv('HttpPlayback');
        if ($mode == false) {
            $mode = 'playback';
        }

        $auth = [
            'server' => 'server',
            'user' => 'user',
            'password' => 'password'
        ];

        if (is_file(getcwd() . '/Resources/auth.json')) {
            $auth = json_decode(file_get_contents(getcwd() . '/Resources/auth.json'), true);
        }

        $client = call_user_func(
            $apiClass . '::withUsernameAndPassword',
            $auth['server'],
            $auth['user'],
            $auth['password'],
            [
                'httpPlayback' => [
                    'mode' => $mode,
                    'recordFileName' => static::class . '.' . $this->getName() . '.json',
                    'recordLocation' => realpath(__DIR__ . '/../../Resources/recordings')
                ]
            ]
        );

        return $client;
    }
}
