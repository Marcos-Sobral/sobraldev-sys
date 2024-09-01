<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            // Obtém o usuário autenticado
            $user = Auth::user();

            // Verifica se o usuário é um administrador
            if ($user->is_admin === 1) {
                return $next($request);
            }
        }

        // Redireciona se o usuário não for um administrador
        return redirect('/')->with('error', 'Você não tem permissão para acessar esta página.');
    }
}

