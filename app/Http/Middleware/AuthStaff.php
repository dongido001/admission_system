<?php

namespace App\Http\Middleware;

use Closure;

class AuthStaff
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

        if ( !$request->session()->has('staff') ) {

            return redirect('staff/login');
        }

        return $next($request);
    }
}
