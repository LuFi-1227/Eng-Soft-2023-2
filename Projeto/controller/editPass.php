<?php
if (isset($_POST['enter'])) {
    if (isset($_POST['Newpass']) && !empty($_POST['Newpass'])) {
        $nova_senha = $_POST['Newpass'];
        $id = $_POST['id'];
        include_once '../model/Data.php';
        if (Data::editPass($nova_senha, $id) == true) {
            header("Location: ../view/AdmUser.php");
            exit();
        }
    }
}
?>