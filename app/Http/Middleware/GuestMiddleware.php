<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session('user')) {
            $role = session('user')->role;
            
            if ($role === 'admin') {
                return redirect('/admin/dashboard');
            } elseif ($role === 'dosen') {
                return redirect('/dosen/dashboard');
            } else {
                return redirect('/mahasiswa/dashboard');
            }
        }

        return $next($request);
    }
}
