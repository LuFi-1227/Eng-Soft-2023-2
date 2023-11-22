<?php
    $flag = 1; //Se receber 1, a classe será configurada para o localHost, se receber 0, a classe será configurada para o servidor;

    if($flag){
        $host = "localhost";
        $dbname = "loginru";//Insira aqui nome do banco de dados 
        $user = "root"; //Isira aqui seu nome de usuário;
        $password = ""; //Insira aqui sua senha;
    }else{
        $host = "mysql";
        $dbname = "u874279737_banco";//Insira aqui nome do banco de dados 
        $user = "u874279737_cassiocoutinho"; //Isira aqui seu nome de usuário;
        $password = "Linux_um@bost@2023"; //Insira aqui sua senha;
    }
?>