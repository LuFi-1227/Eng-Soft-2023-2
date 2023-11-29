<?php
include_once '../vendor/autoload.php';

use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

class jwtObject
{
    public static function decode($JWT)
    {
        $acesso = JWT::decode($JWT, new key("htsres", 'HS256'));
        $acesso = json_decode(json_encode($acesso), true);
        return $acesso;
    }//Faz o decode da variável JWT encriptada e retorna um vetor para quem chamar a função;
}

?>