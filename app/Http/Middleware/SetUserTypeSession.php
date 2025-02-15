<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SetUserTypeSession
{
    public function handle($request, Closure $next, $userType)
    {
        if (Auth::check()) {
            session(['user_type' => $userType]);
        }

        return $next($request);
    }
}
