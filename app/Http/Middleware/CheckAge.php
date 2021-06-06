<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        // autentiación con parámetros en la url
        /*if($request->age >= 18){
            return $next($request);
        }
        else{
            return redirect('no-autorizado');
        }*/

        // autentiación comparando el email de la base de datos
        if(auth()->user()->email == "sam@peruweb.cc"){
            return $next($request);
        }
        else{
            return redirect('no-autorizado');
        }
    }
}