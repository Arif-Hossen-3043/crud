<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checklogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('user')) {
            return redirect()->route('login.page')
                ->withErrors(['Please login first']);
        }

        return $next($request);
    }
}