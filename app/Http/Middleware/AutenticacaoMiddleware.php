<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        echo  "$metodo_autenticacao <br>";

        if($metodo_autenticacao == 'padrao'){
            echo 'Autenticação padrão '.$perfil.' <br>';
        }else if($metodo_autenticacao == 'ldap'){
            echo 'Autenticação LDAP '.$perfil.' <br>';
        }
        if($perfil == 'admin'){
            echo 'Perfil de administrador <br>';
        }else if($perfil == 'visitante'){
            echo 'Perfil de visitante <br>';
        }
        if(false){
            return $next($request);
        }
        return Response('Acesso negado! Rota exige autenticação!');
    }
}
