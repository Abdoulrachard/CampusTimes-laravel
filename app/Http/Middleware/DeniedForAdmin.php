<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class DeniedForAdmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            switch (Auth::user()->role_id) {
                case 1:
                    return redirect('/admin/dashboard'); // Redirige les administrateurs vers leur dashboard
                default:
                    return $next($request); // Autorise l'accès aux autres utilisateurs à d'autres pages
            }
        }

        return redirect('/auth/login'); // Redirige vers la page de connexion si l'utilisateur n'est pas authentifié
    }
}
