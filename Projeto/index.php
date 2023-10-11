<?php
    $url = $_SERVER["REQUEST_URI"];
    session_start();
    $JWT = $_SESSION['jwt'];
    
    switch($url){
        case '/login': 
           header("Location: https://uftdevs.com.br/view/login.php");
            break;
        case "/profile" :
            header("Location: https://uftdevs.com.br/view/UserProfile.php");
            break;
        case "/admuser":
            header("Location: https://uftdevs.com.br/view/AdmUser.php");
            break;
        default : 
            echo ("página não existe");
    }
?>