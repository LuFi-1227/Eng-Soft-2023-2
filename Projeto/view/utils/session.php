<?php
include_once '../vendor/autoload.php';

use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

session_start();
$JWT = $_SESSION['jwt'];
if (!isset($JWT)) {
    header("Location: ./login.php");//Se o usuário não estiver logado para acessar esta página, redireciona para a página de login, by: @LuFi-1227
}
?>