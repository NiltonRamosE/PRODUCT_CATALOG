<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('administrators')->check()) {
            return redirect()->route('dashboard.index');
        }

        return $next($request);
    }
}
