<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if (Auth::guest()) {

            return redirect('/');

        } else {

            $userRole = Auth::user()->role;
            if ($userRole == 'Admin') {
            return $next($request);
        }
       
        return redirect('/');
         }
    }
}

