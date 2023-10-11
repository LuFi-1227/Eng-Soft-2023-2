<?php 
//Classe que será utilizada para o envio de dados para o painel de controle
require_once "../vendor/autoload.php";
require_once "../model/Connection.php";
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Data{
   
    public function login($cpf, $pass){
        
        // cria conexão, constrói a query e fecha a conexão
        
        $pdo = new Connection();
        $pdo = $pdo->Connect();
        $query = "SELECT * FROM usuarios WHERE CPF = '$cpf' and senha = '$pass'";
        $result = mysqli_query($pdo, $query);
        $pdo->close();
        
        // se o resultado da busca no banco de dados estiver vazio ou diferente de 1 retorna 0 (falso)
        if(empty($result) || mysqli_num_rows($result) != 1){
            http_response_code(401);
            return 0;
        }
        
        // se o if não ocorreu um fetch assoc é feito para transformar a resposta do banco de dados numa string

        $linha = mysqli_fetch_assoc($result);
        
        // passando os dados juntos para o jwt para ele transformar tudo num hash
        
        $payload = [
            "cpf" => $cpf,
            "perm" => $linha ["permissao"],
        ];
        $encode = JWT::encode($payload, "htsres", 'HS256');
        
        // inicia uma sessão e guarda o hash do jwt nela
        
        session_start ();
        $_SESSION["jwt"] = $encode;
        
        // se tudo deu certo retorna 1 (true)
        
        return 1;
    }

    public function table($cpf){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        $query = "SELECT * FROM $tablename inner join legendas_permissao where usuarios.permissao = legendas_permissao_id and usuarios.cpf = '$cpf';";
        $result = mysqli_query($pdo, $query);
        $pdo->close();
        return $result;
    }
    
    //FUNÇÃO CRIADA PARA A BUSCA DO PERFIL DO USUÁRIO, CRIADO POR CÁSSIO
    
    public function ProfileUser(){
        $pdo = new Connection();
        $pdo = $pdo->Connect();
        
        session_start ();
        $aux = $_SESSION;
    
            if (isset($aux['jwt'])) {
               try {
                    $decode = JWT::decode ($aux,  new Key ("htsres", "HS256"));
                    $cpf = $decode->cpf;
                    
                     $tablename = "usuarios";
    
                    $query = "SELECT nome, cpf, email, numMat FROM $tablename where usuarios.cpf = '$cpf';";
                    $result = mysqli_query($pdo, $query);
                    $pdo->close();
                    return $result;
                
                
                } catch (Exception $e) {
                    echo "Erro: " . $e->getMessage();
                }
            } else {
                echo "Token JWT não encontrado na variável de sessão.<br>";
                var_dump("$_SESSION");
            }
   }

    public function tableC(){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        $query = "SELECT * FROM $tablename inner join legendas_permissao where usuarios.permissao = legendas_permissao_id limit 5";
        $result = mysqli_query($pdo, $query);
        $pdo->close();
        return $result;
    }

    public static function registerUser($nome,string $sobrenome=null, $cpf, $perm, $email, $numMat){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        if(strcmp($perm, "Adm")==0){
            $permissao = 2;
        }else{
            if(strcmp($perm, "Tecnico")==0){
                $permissao = 3;
            } else{
                $permissao = 5;
            }
        }

        $query = "INSERT INTO $tablename (permissao, nome, sobrenome, cpf, email, senha, data_de_nascimento, data_criacao, data_atualizacao) VALUES ('$permissao','$nome', '$sobrenome', '$cpf', '$email', 'senha', '20-20-2020', '20-20-2020', '20-20-2020')";
        $result = mysqli_query($pdo, $query);
        
        if($result){
            $pdo->close();
            return true;
        }
        return false;
    }
    
    public static function removeCash(){
        $pdo = new connection();
        $pdo = $pdo->connect();

        $tablename = "saldo";

        $query = "UPDATE $tablename SET movimentacao = 10";
        $result = mysqli_query($pdo, $query);
        $pdo->close();

    }
}
?>