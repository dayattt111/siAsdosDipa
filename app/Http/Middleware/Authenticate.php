<?php

namespace App\Http\Middleware;

class Authenticate
{
    public function handle($request, $next)
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }

        return $next($request);
    }
}
