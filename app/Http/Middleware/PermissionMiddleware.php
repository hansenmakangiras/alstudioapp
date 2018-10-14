<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PermissionMiddleware
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
        if (Auth::user()->hasRole('Admin')) //If user has admin role
        {
            return $next($request);
        }
        if (Auth::user()->hasRole('Superadmin')) //If user has admin role
        {
            return $next($request);
        }
        if (Auth::user()->hasPermissionTo('Administer Roles & Users')) //If user has admin role
        {
            return $next($request);
        }
        if (Auth::user()->hasRole('User')) //If user has user role
        {
            if ($request->is('jenis-cetak/create'))//If user is creating a post
            {
                if (!Auth::user()->hasPermissionTo('add-jeniscetak'))
                {
                    abort('401');
                }
                else {
                    return $next($request);
                }
            }
        }

        return $next($request);
    }
}
