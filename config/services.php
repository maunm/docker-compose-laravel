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
        'client_id' => '872660799603139',
        'client_secret' => 'f9dee926e84041af3f250d8b8bdfc6e9',
        'redirect' => 'http://localhost:8080/oauth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'UJYNXxZ4MhcQlji2xRzNkaY7j',
        'client_secret' => 'GhA1UO6ggf5Ke1Pz9CKmXx66HkwvX6lHBMFzM5BIAULYDsM0A5',
        'redirect' => 'http://localhost:8080/oauth/twitter/callback',
    ],

    'github' => [
        'client_id' => '4723e3fdfe674f659f3a',
        'client_secret' => '80d08700a84a5b49a20e190da8dfa6ffc4de6026',
        'redirect' => 'http://localhost:8080/oauth/github/callback',
    ],

    'google' => [
        'client_id'     => '840884560860-rqnufg86gl8ml1c93otodvfn1g3hb3fm.apps.googleusercontent.com',
        'client_secret' => 'UBh8Jyz6XT_4pTh6IkG_LQAC',
        'redirect'      => 'http://localhost:8080/oauth/google/callback',
    ],
    

];
