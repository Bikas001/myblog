<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //this will check whether user was login or not
        if(!Auth::check()){

            return redirect()->route('login');
        }elseif (Auth::user()->role->name == 'Admin'){ //this will check the role of user
            return $next($request);
        }elseif (Auth::user()->role->name == 'User'){
            return redirect()->route('user');
        }


    }
}
