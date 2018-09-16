<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfAdminAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {


        if (!Auth::guard('admin')->check()) {
            return redirect('/admin/loginForm');
        }

        return $next($request);
    }
}