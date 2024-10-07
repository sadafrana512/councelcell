<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class hodMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is the Head of Department
        if (auth()->check() && auth()->user()->ishod()) {
            return $next($request);
        }

        // If not, redirect or handle the unauthorized access as needed
        abort(403, 'Unauthorized action.');
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
}
