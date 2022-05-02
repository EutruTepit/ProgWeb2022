<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificaNivel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        # Verifica se esta logado
        if(!Auth::user()){
            return redirect('login');
        }
        
        # nivel 0 (usuario comum) - nivel 1 (admin)
        if(Auth::user()->nivel != 1){ # n admin
            return redirect('dashboard');
        }

        return $next($request);
    }
}
