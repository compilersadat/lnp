<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
    'google' => [
        'client_id'     => '409327792054-kekdjfcel5l2ck3631u9sg18j021rf5i.apps.googleusercontent.com',
        'client_secret' => '8eGd4ctNQ48yUPP-ei6aB8kN',
        'redirect'      => 'http://latenightpizza.com/callback/google'
    ],
    'facebook' => [
        'client_id' => '226002932101468',
        'client_secret' => 'aeb7ebe6da32368ee37247e7c6a8ada8',
        'redirect' => 'http://latenightpizza.com/callback/facebook',
    ],

];
