<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureProviderIsLoggedIn
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
        if (Auth::check()) {
            if (Auth::user()->role == 'Provider' || Auth::user()->role == 'Admin') {
                return $next($request);
            }
        }
        $request->session()->put('missingAuth', 'Provider');
        return redirect()->route('401');
        // https://stackoverflow.com/questions/33483532/which-to-use-authcheck-or-authuser-laravel-5-1
    }
}
