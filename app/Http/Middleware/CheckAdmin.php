<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{

    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('administrators')->check()) {
            return redirect()->route('login.index')->with('error', 'Debes iniciar sesión para acceder a esta página.');
        }
        
        return $next($request);
    }
}
