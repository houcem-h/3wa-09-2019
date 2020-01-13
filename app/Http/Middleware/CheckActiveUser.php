<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckActiveUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->active_user == 0) {
                Auth::logout();
                return redirect()->route('login')->with('userInactive', 'Votre compte est désactivé. Merci de contacter votre administrateur');
            }
        }
        return $next($request);
    }
}
