<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DeniedForStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $roles
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         if (Auth::check()) {
            switch (Auth::user()->role_id) {
                case 1:
                    return $next($request); // Permet l'accès aux administrateurs (role_id = 1)
                default:
                    return redirect('/'); // Redirige tous les autres utilisateurs vers la page d'accueil
            }
        }

        return redirect('/auth/login'); // Redirige vers la page de connexion si l'utilisateur n'est pas authentifié
    }
}
