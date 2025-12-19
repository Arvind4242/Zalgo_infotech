<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OptionalAuthenticate
{
    public function handle($request, Closure $next)
    {
        if ($request->bearerToken()) {
            Auth::shouldUse('api');
            $user = Auth::guard('api')->user();

            if ($user) {
                Auth::setUser($user);
            }
        }

        return $next($request);
    }
}
