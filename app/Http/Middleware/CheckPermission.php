<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPermission
{
    public function handle($request, Closure $next, ...$permissions)
    {
        if (Auth::check()) {
            foreach ($permissions as $permission) {
                if (!Auth::user()->can($permission)) {
                    return response()->json(['error' => 'Unauthorized'], 403);
                }
            }
            return $next($request);
        }

        return response()->json(['error' => 'Unauthorized'], 403);
    }
}
