<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
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

    'firebase' => [
        'api_key' => 'AIzaSyBghOdDHdAEZM7I_DUuF2ChEmUlzCgpEhI',
        'auth_domain' => 'smart-school-apps-25be8.firebaseapp.com',
        'database_url' => 'https://smart-school-apps-25be8.firebaseio.com',
        'project_id' => 'smart-school-apps-25be8',
        'storage_bucket' => 'smart-school-apps-25be8.appspot.com',
        'messaging_sender_id' => '34383189782',
        'app_id' => '1:34383189782:web:6c7ff5839fca8baf986237',
        'measurement_id' => 'G-TG0XDH0GR3',
    ],

];
