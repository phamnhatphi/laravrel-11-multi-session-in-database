<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\ExtendSession::class,
            \App\Http\Middleware\UserTypeSession::class,
        ],

        'api' => [
        ],
    ];

    protected $routeMiddleware = [
        'permission' => \App\Http\Middleware\CheckPermission::class,
        'setUserType' => \App\Http\Middleware\SetUserTypeSession::class,
    ];
}
