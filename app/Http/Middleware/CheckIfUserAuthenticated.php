<?php
/**
 * Created by PhpStorm.
 * User: quocthangvu
 * Date: 5/14/2017
 * Time: 11:22 AM
 */

namespace App\Http\Middleware;

use Closure;

class CheckIfUserAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {

        $userId = $request->session()->get('userId', null);

        if ($userId == null) {
            return redirect('/loginForm');
        }

        return $next($request);
    }

}