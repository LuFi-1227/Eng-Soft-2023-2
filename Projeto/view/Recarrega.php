<?php
include("./utils/session.php");
require_once("./utils/jwt.php");

use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

/*session_start();*/
$JWT = $_SESSION["jwt"];
$array = jwtObject::decode($JWT, new Key ("htsres", 'HS256'));
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include "./components/header.php" ?>
<body>
<div class="main" style="text-align:center">
    <h1 style="margin-top:2%">Recarregar Saldo</h1>
    <div style="margin-top:2%">
        <a href="./RecarregaPIX.php">
            <button class="btn btn-primary">Recarregar por PIX</button>
        </a>
    </div>
    <div style="margin-top:2%">
        <a href="">
            <button class="btn btn-primary">Recarregar por Boleto Bancário</button>
        </a>
    </div>
</div>
<?php include "./components/footer.html" ?>
</body>