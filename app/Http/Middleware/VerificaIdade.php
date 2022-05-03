<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificaIdade
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
        $data = explode("-", Auth::user()->data_nacimento);

        $idade = date('Y') - $data[0];

        if(date('m') < $data[1]){
            $idade -=1;
        } elseif ((date('m') == $data[1]) && (date('d') <= $data[2])){
            $idade -=1;
        }

        if($idade < 18){
            return redirect('dashboard');
        }

        return $next($request);
    }
}
