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
    'firebase' => [
        'api_key' => 'AIzaSyA1csKPvLIZ0iOXGjKicoG1SzBxmuA5Kn8',
        'auth_domain' => 'testing-7687.firebaseapp.com',
        'database_url' => 'https://testing-7687.firebaseio.com',
        'secret' => 'pz9O5RR4Do8PR5m7tTpE2nR3A6NS0cpZC6pzhzEp', //from service accounts
        'storage_bucket' => 'testing-7687.appspot.com',
    ],
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

];
