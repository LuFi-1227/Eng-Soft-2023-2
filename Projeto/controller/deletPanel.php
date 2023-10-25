<?php
include_once '../model/Data.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
echo "<script> window.location.href = 'https://uftdevs.com.br/view/AdmUser.php'; </script>";
Data::delete($id);
?>