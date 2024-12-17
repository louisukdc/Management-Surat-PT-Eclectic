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
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $userType
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            // Redirect to login if not authenticated
            return redirect()->route('login')->withErrors('You need to log in first.');
        }

        // Check if the user's type matches the required type
        if (auth()->user()->type === $userType) {
            return $next($request);
        }

        // If the user type does not match, return a forbidden response or redirect
        return response()->view('errors.check-permission', [], 403);

        // Alternatively, you can redirect to a specific page
        // return redirect()->route('home')->withErrors('You do not have permission to access this page.');
    }
}

