<?php


namespace App\Http\Middleware;

use Closure;

class RedirectIfUserAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        $userId = $request->session()->get('userId', null);

        if ($userId != null) {
            return redirect('/profile');
        }

        return $next($request);



    }

}