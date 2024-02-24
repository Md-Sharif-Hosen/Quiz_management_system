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
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            //admin check
            if (Auth::user()->role_id == "1") {
                return $next($request);
                // return redirect('/dashboard')->with('message', 'Access denied you are not admin');
            } else {
                return redirect('/')->with('message', 'Sign In Successfully');
            }
        } else {
            return redirect('/login')->with('message', 'login to access website');
        }


    }
}
