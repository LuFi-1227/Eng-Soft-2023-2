<?php
$id = $_POST['id'];
if (isset($_POST['enter'])) {
    $nome = $_POST['name'];
    $cpf = $_POST['CPF'];
    $email = $_POST['email'];
    $option = $_POST['optione'];
    if (isset($_POST['numMat']) && !empty($_POST['numMat'])) {
        $numMat = $_POST['numMat'];
    } else {
        $numMat = null;
    }
    include_once '../model/Data.php';
    if (Data::editUser($id, $nome, $cpf, $option, $email, $numMat) == true) {
        header("Location: ../view/AdmUser.php");
        exit();
    }
}
?>