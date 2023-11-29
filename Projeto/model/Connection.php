<?php

//Classe que será usada para instanciar conexão com banco de dados
class Connection
{
    public static function Connect()
    {
        include "config/config.php";
        $conn = mysqli_connect($host, $user, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            return $conn;
        }
    }
}

?>