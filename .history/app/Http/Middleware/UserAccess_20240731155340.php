<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    //public function handle(Request $request, Closure $next): Response
    // {
    //    return $next($request);
    // }

    public function handle(Request $request, Closure $next, $userType)
    {
        // Check if the user has the specified role
        if (!Auth::check() || !Auth::user()->hasRole($role)) {
            // Redirect if the user doesn't have permission
            return redirect('/')->with('error', 'You do not have permission to access this page.');
        }

        return $next($request);
    }
}
