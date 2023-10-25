<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include_once '../vendor/autoload.php';
include_once "../model/Data.php";
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

class ControlPanel{
    
    function login ($cpf , $password) {
        
        $data = new Data();
        
        // se a função login do documento data retornar 1 a verificação é feita, senão retornou 0 e isso é passado para o html mostrar o alert
        
        if($data->login($cpf , $password)){
            if($line['perm'] <= 2){
            header("Location: ../view/AdmUser.php");
            }else{
                if($line['perm'] == 3){
                    echo "Atendente logado";
                }else{
                    if($line['perm'] == 4){
                        echo "Cobrador logado";
                    }else{
                        if($line['perm'] == 5){
                            header("Location: ../view/UserProfile.php");
                        }else{
                            if($line['perm'] == 6){
                                header("Location: ../view/Catraca.php");
                            }else{
                                echo "Cadastro não encontrado!";
                            }
                        }
                    }
                }
            }
        } else {
            return 0;
        }
    }
    
     public function pullData($flag, $var){
        include_once '../model/Data.php';
        $data = new Data();
        if($flag == 0){
            return $data->table($var);
        }else{
            if($flag == 1){
                return $data->tableId($var);
            }else{
                return $data->tableC();
            }
        }
    }
    
    public function logOut(){
        session_start();
        unset($_SESSION['jwt']);
        session_destroy();
    }
    
    public function retrievePassword($email) {
        $data = new Data();
        $retrievedEmail = $data->retrievePassword($email);
        
        if($retrievedEmail === 0){
            echo "E-mail não encontrado!";
            return 0;
        } else {
            $to = $retrievedEmail; // Endereço de e-mail do destinatário
            $subject = "Recuperação de senha"; // Assunto do e-mail
            $message = "Clique no link a seguir para recuperar a senha: https://uftdevs.com.br/view/CadstroUsuario.php";
            $headers = "From: Uftdeves"; // Cabeçalhos do e-mail (incluindo o endereço do remetente)

            // Aqui você pode usar a função mail() ou uma biblioteca de e-mail para enviar o e-mail.
            // Exemplo com a função mail():
            if (mail($to, $subject, $message, $headers)) {
                echo "E-mail enviado com sucesso!";
            } else {
                echo "Erro ao enviar o e-mail.";
            }
        }
    }

}
?>