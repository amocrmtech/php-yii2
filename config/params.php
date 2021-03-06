<?php

use AmoCRMTech\Yii2\Components\Client\ClientFactory;
use yii\db\Connection;
use yii\db\pgsql\Schema;

return [
    'amocrmtech.enabled'     => true,
    'amocrmtech.wrapper'     => null,
    'amocrmtech.locator'     => 'amocrmtech_locator',
    'amocrmtech.definitions' => [
        'default_db'     => [
            'class'     => Connection::class,
            'dsn'       => 'pgsql:host=pgsql.amocrmtech.it;dbname=0000000;port=5434',
            'username'  => 'postgres',
            'password'  => '',
            'charset'   => 'utf8',
            'schemaMap' => ['pgsql' => ['class' => Schema::class, 'defaultSchema' => 'v4']]
        ],
        'default_client' => function () {
            return ClientFactory::buildOAuth([
                'subdomain'     => 'your_subdomain',
                'refreshToken'  => 'your_refresh_token',
                'redirectUri'   => 'your_redirect_uri',
                'integrationId' => 'your_integration_id',
                'secretKey'     => 'your_secret_key',
            ]);
        },
    ],
];