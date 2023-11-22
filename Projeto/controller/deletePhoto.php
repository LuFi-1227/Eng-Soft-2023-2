<?php
session_start(); 
include_once '../controller/controlPanel.php';
require_once '../view/utils/jwt.php';

$ctrl = new ControlPanel();
$cpf = jwtObject::decode($_SESSION['jwt']);

$defaultPhotoPath = '...view/brasao_uft.webp';


$ctrl->updatePhoto($cpf['cpf'], $defaultPhotoPath);
header('Location: ./UserProfile.php'); 
