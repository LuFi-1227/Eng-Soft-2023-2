<?php
include_once './controlPanel.php';
$c = new controlPanel();
$c->logOut();
echo "<script> window.location.href = 'https://uftdevs.com.br/view/login.php'; </script>";
?>