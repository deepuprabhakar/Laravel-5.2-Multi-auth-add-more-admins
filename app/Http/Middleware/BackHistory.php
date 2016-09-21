<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class BackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = NULL)
    {
        $response = $next($request);
        if(Auth::guard($guard)->check())
        {
            return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
        }
        else
        {
            return redirect()->guest($guard.'/login');
        }
        
    }
}
