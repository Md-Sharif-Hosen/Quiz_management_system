<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentMiddleware
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
            if (Auth::user()->role_id == 2) {
                return $next($request);
            } else {
                return redirect('/dashboard')->with('message', 'Sign In Successfully');

            }
        } else {
            return redirect('/login')->with('message', 'login to access website');
        }

        // return $next($request);
    }
}
