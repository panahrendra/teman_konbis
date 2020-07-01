<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'user',
    ],

    // Guard

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'user',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'user',
        ],

        'admin' => [
          'driver' => 'session',
          'provider' => 'admin',
        ],

        'admin-api' => [
            'driver' => 'token',
            'provider' => 'admin',
        ],

        'user' => [
          'driver' => 'session',
          'provider' => 'user',
        ],

        'user-api' => [
            'driver' => 'token',
            'provider' => 'user',
        ],
    ],

    //  Providers

    'providers' => [
        'user' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        'admin' => [
          'driver' => 'eloquent',
          'model' => App\Admin::class,
        ],

    ],

    // Password

    'passwords' => [
        'user' => [
            'provider' => 'user',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];