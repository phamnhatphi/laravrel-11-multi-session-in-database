<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class ExtendSession
{
    public function handle($request, Closure $next)
    {
        // Gia hạn session
        Session::set('last_activity', time());

        return $next($request);
    }
}
