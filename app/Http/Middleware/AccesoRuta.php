<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class AccesoRuta
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $usuario = $request->user();
        $ruta    = Route::getRoutes()->match($request)->uri();
        $metodo  = $request->method();

        if($usuario->hasAccesoParticular($ruta, $metodo) || $usuario->hasAccesoGrupal($ruta, $metodo)){
            return $next($request);
        }else{
            abort(403);
        }
    }
}
