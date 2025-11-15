<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRol
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Esperar a que el usuario esté disponible
        $user = $request->user();

        if (!$user || !in_array(trim(strtolower($user->rol ?? '')), $roles)) {
            abort(403, 'No tienes acceso a esta sección.');
        }

        return $next($request);
    }
}