<?php
session_start(); 
include_once '../controller/controlPanel.php';
include_once '../model/Data.php';
require_once '../view/utils/jwt.php';
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["photo"])) {
    $target_dir = "../uploads/";  // Diretório de destino para salvar as fotos
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verificar se o arquivo é uma imagem real ou uma imagem falsa
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check !== false) {
            echo "Arquivo é uma imagem - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "O arquivo não é uma imagem.";
            $uploadOk = 0;
        }

        if ($_FILES['photo']['size'] > 500000) {
            $uploadOk = 0;
        }

        if ($imageFileType !== 'jpg' && $imageFileType !== 'png' && $imageFileType !== 'jpeg' && $imageFileType !== 'gif') {
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo 'Seu arquivo não foi enviado.';
        } else {
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
                $photoPath = $target_file;
                // Assuming updatePhoto() is the correct method in your ControlPanel class
                $ctrl = new ControlPanel(); // Instantiate ControlPanel if not already instantiated
                $ctrl->updatePhoto($cpf['cpf'], $photoPath);
                header('Location: ../view/UserProfile'); 
            } else {
                echo 'Houve um erro no envio do arquivo.';
            }
        }
    }
}
?>
