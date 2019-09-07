<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '169626256931825',
        'client_secret' => '8f8f9720b747e51d8d2fe8ee764758a9',
        'redirect' => 'http://localhost:8000/callback',
    ],
    'google' => [
        'client_id' => '93987342256-vq3a40lu3n7i3itmlgf7tnnndeqos0bp.apps.googleusercontent.com',
        'client_secret' => 'H6exQ63TljWIW7rDKfyET73c',
        'redirect' => 'http://localhost:8000/google/callback',
    ],
    
];
