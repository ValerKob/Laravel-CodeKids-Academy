<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('is_admin') || !$request->session()->get('is_admin')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
