<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class ClientMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role_id == 1) { // 1 étant l'ID de rôle de l'administrateur
            return $next($request);
        }
        Alert::toast("Vous n'avez pas d'accès à cette page.",'info');
        return redirect('/')->with('error', 'Vous n\'avez pas accès à cette page.');
    }
}
