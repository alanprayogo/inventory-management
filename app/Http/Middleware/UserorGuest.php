<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserorGuest
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            // Jika pengguna sudah login, periksa perannya
            $role = Auth::user()->role;
            if ($role === 'Member') {
                return $next($request);
            } elseif ($role === 'Admin') {
                return redirect()->route('dashboard-admin');
            } else {
                // Jika peran pengguna tidak sesuai, arahkan ke halaman dashboard umum atau halaman lain
                return redirect()->route('/');
            }
        }
    }
}

