<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AddCspForFilament
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set(
            'Content-Security-Policy',
            "script-src 'self' 'unsafe-eval' 'unsafe-inline' https://www.googletagmanager.com; object-src 'none'"
        );

        return $response;
    }
}
