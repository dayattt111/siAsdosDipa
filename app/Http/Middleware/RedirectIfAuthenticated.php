<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\RedirectIfAuthenticated as Middleware;

class RedirectIfAuthenticated extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array<int, string>  $guards
     * @return string|null
     */
    protected function redirectTo($request, ...$guards)
    {
        return redirect('/home');
    }
}
