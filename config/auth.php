<?php
return [
    'defaults' => [
        'guard' => env('AUTH_GUARD', 'api'),
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'jwt',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'jwt',
            'provider' => 'users',
            'hash' => false,
        ],

    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model'  =>  App\Models\User::class,
        ]
    ]

];
