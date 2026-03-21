<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecureHeaders
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Referrer-Policy', 'no-referrer-when-downgrade');

        // 🔥 MAIN FIX (CSP)
        $response->headers->set('Content-Security-Policy', "
            default-src 'self' https:;
            script-src 'self' https://www.googletagmanager.com https://cdnjs.cloudflare.com 'unsafe-inline';
            style-src 'self' https://cdnjs.cloudflare.com 'unsafe-inline';
            img-src 'self' https: data:;
            font-src 'self' https: data:;
            connect-src 'self' https:;
            object-src 'none';
            frame-ancestors 'self';
        ");

        return $response;
    }
}