<?php
include ("./utils/session.php");
require_once("./utils/jwt.php");
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;
/*session_start();*/
$JWT = $_SESSION["jwt"];
$array = jwtObject::decode($JWT,  new Key ( "htsres", 'HS256'));

//Colocar aqui a URL do qrcode!=>
$url = "https://github.com/LuFi-1227/Eng-Soft-2023-2";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php include "./components/header.php"?>
<body>
    <div style="text-align:center">
        <?php
            // Título
            echo "<h2>Pagar com PIX</h2>";

            // Gerar QRCode: instanciar a classe QRCode e enviar os dados para o render gerar o QRCode
            $qrcode = (new \chillerlan\QRCode\QRCode())->render($url);
            //var_dump($qrcode);
            
            // Imprimir o QRCode
            echo "<img src='$qrcode' style='width: 500px; height:auto;'>";

            echo "<div>Nome: RMP RU</div><div>CPF: 000.000.000-00</div>";
        ?>
    </div>
    <?php include "./components/footer.html"?>
</body>