<?php

namespace App\Http\Middleware;

use Closure;

class checkUser
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
        $user = UsuPermitidos::where('nombre', '=', $request->input('usuario'))->first();

        if ($user) {
            if ($user->permiso == true){
                return view('usuPermiso', ['users' => $user]);
            } else{
                //return $user->nombre;
                return view('usuNoPermiso', ['users' => $user]);
            }
        } else {
            return "el usuario no existe";
        }
    }
}
