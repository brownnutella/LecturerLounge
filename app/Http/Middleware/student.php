<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 'student') {
            return $next($request);
        }

        if (Auth::user()->role == 'lecturer') {
            return redirect()->route('lecturer');
        }

        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin');
        }
    }
}
