<?php 
//Classe que será usada para instanciar conexão com banco de dados
class Connection{
    public static function Connect(){
        $host = "mysql";
        $dbname = "u874279737_banco";//Insira aqui nome do banco de dados 
        $user = "u874279737_cassiocoutinho"; //Isira aqui seu nome de usuário;
        $password = "Linux_um@bost@2023"; //Insira aqui sua senha;
        $conn = mysqli_connect($host, $user, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }else{
                return $conn;
            }
    }
}
?>