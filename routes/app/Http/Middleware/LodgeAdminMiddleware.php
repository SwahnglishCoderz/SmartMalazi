<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class LodgeAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //1. User should be authenticated.

        //2. Authenticated user should be a lodgeadmin
        if (Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'lodge-admin')

            return $next($request);
        else
            return redirect('/not-allowed');
    }
}
