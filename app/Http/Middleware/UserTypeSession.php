<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserTypeSession
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->isAdmin()) {
                Session::put('user_type', 'admin');
            } else {
                Session::put('user_type', 'customer_user');
            }
        }

        return $next($request);
    }
}