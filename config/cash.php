<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Credentials
    |--------------------------------------------------------------------------
    */
    'relation' => env('CASH_RELATION'),
    'email' => env('CASH_EMAIL'),
    'password' => env('CASH_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | Used administration
    |--------------------------------------------------------------------------
    */
    'administration' => [
        'code' => env('CASH_ADMINISTRATION_CODE'),
        'map' => env('CASH_ADMINISTRATION_MAP'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Endpoint
    |--------------------------------------------------------------------------
    */
    'wsdl' => 'https://www.cashweb.nl/?api/3.0/wsdl',

    /*
    |--------------------------------------------------------------------------
    | Logging
    |--------------------------------------------------------------------------
    */
    'logging' => [
        'enabled' => env('CASH_LOGGING_ENABLED', false),
        'channel' => 'stack',
        'level' => 'debug',
    ],

    /*
    |--------------------------------------------------------------------------
    | Logging: Responses
    |--------------------------------------------------------------------------
    |
    | Filepath for responses. Responses are stored separately from
    | regular logs, since they can be quite large.
    |
    */
    'response_path' => storage_path('cash_responses'),
];
