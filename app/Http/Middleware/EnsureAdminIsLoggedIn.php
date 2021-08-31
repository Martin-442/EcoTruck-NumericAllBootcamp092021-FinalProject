<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class EnsureAdminIsLoggedIn
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
            if (Auth::user()->role == 'Admin') {
                return $next($request);
            }
        }
        $request->session()->flash('missingAuth', 'Admin');
        return redirect()->route('401');
        // https://stackoverflow.com/questions/33483532/which-to-use-authcheck-or-authuser-laravel-5-1
    }
}
