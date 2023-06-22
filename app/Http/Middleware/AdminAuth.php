<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class adminAuth
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

        if (!Auth::check()) return redirect('login')->with('message', 'Error: usuario no autenticado');

        if(Auth::user()->role=='admin') return $next($request);

        return redirect('login')->with('message', 'Error: no tiene permisos de administración');
        
    }
}
