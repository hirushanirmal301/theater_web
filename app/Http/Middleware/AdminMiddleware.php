<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('login')) {
            return response('Login process failed.', 401);
        }

        if (Auth::check()) {

            if (Auth::user()->hasRole('superadmin') || Auth::user()->hasRole('admin')) {

                return $next($request);

            }
            else {

                return redirect('/');

            }

        } else {

            return redirect('/login')->with('status', 'Please Login First');

        }
    }
}
