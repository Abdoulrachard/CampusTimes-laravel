<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class CheckUserIsBlocked
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle($request , Closure $next)
    {
        if (Auth::check() && Auth::user()->isblocked()) {
            Auth::logout();
            return redirect()->route('auth.login')->withErrors(['email' => "Votre compte a été bloqué. Vous avez été déconnecté."]);
        }

        return $next($request);
    
    }
}
