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
            "id" => $linha["usuario_id"],
            "nome" => $linha["nome"],
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
    // FUNÇÕES CRIADAS LUIZ SOUZA
    public function table($cpf){ // SEM ALTUREAÇÃO
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        $query = "SELECT * FROM $tablename inner join legendas_permissao where usuarios.permissao = legendas_permissao_id and usuarios.cpf = '$cpf';";
        $result = mysqli_query($pdo, $query);
        $pdo->close();
        return $result;
    }
    
    
     public function tableId($id){ 
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        $query = "SELECT usuario_id, nome, email, legendas_permissao.permissao as permissao, cpf, email FROM $tablename inner join legendas_permissao where usuarios.permissao = legendas_permissao_id and usuario_id = '$id';";
        $result = mysqli_query($pdo, $query);
        $pdo->close();
        return $result;
    }
    
       public function tableC($id){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        $query = "SELECT * FROM $tablename inner join legendas_permissao where usuarios.permissao = legendas_permissao_id and $id != usuarios.usuario_id order by usuario_id desc limit 8";
        $result = mysqli_query($pdo, $query);
        $pdo->close();
        return $result;
    }
    
     public static function delete($obj){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        $query = "DELETE FROM $tablename WHERE usuario_id = $obj";
        $result = mysqli_query($pdo, $query);
        $pdo->close();
    }
    // FUNÇAÕ CRIADA PELO LUIZ SOUSA
    public static function editUser($id, $nome, $cpf, $perm, $email, $numMat){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        if($perm == 1){
            $permissao = 2;
        }else{
            if($perm == 3){
                $permissao = 3;
            } else{
                $permissao = 5;
            }
        }
        
        $query = "UPDATE $tablename set permissao = '$permissao', nome = '$nome', cpf = '$cpf', email = '$email', data_atualizacao = NOW() where usuario_id = '$id'";

        $result = mysqli_query($pdo, $query);
        
        if($result){
            $pdo->close();
            return true;
        }
        return false;
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

   
    public static function registerUser($nome, $cpf, $perm, $email, $numMat){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";
        
        if($perm == 1){
            $permissao = 2;
        }else{
            if($perm == 3){
                $permissao = 3;
            } else{
                $permissao = 5;
            }
        }
        $busca = new Data();
        $var = $busca->table($cpf);
        
        //Deixa a porra do &&
        if(!empty($var) && mysqli_num_rows($var) != 0){
            return -1;//Se houver algum cpf igual ao cpf da função já cadastrado, retorna -1;
        }
        
        $query = "INSERT INTO $tablename (permissao, nome, cpf, email, senha, data_de_nascimento, data_criacao, data_atualizacao) VALUES ('$permissao','$nome', '$cpf', '$email', 'senha', '20-20-2020', NOW(), NOW())";
        $result = mysqli_query($pdo, $query);
        
        if($result){
            $pdo->close();
            return 1;
        }
        return 0;
    }
    
    //Função feita por Luís Felipe Krause
    //Essa função faz a consulta do saldo do usuário no banco de dados
    public function tableExtract($cpf){
        $pdo = new Connection();
        $pdo = $pdo->Connect();
        
        $result = mysqli_query($pdo, "SELECT saldo.saldo, usuarios.data_atualizacao FROM usuarios INNER JOIN saldo ON usuarios.usuario_id = saldo.usuario_id WHERE usuarios.cpf = '$cpf'");
        
        $pdo->close();

        return $result;
    }

    
    //função feita por Rafael de Oliveira Ribeiro.
    //essa função faz a alteração do saldo do usuario adicionando mais saldo.
    function adicionarSaldo($cpf, $numeroRefeicoes) {
        $pdo = new connection();
        $pdo = $pdo->connect();
    
        $tablenameSaldo = "saldo";
        $tablenameUsuarios = "usuarios";
    
        // Consulta para obter o saldo e CPF do usuário
        $query = "SELECT $tablenameSaldo.saldo, $tablenameUsuarios.cpf 
                  FROM $tablenameSaldo
                  INNER JOIN $tablenameUsuarios ON $tablenameSaldo.usuario_id = $tablenameUsuarios.usuario_id
                  WHERE $tablenameUsuarios.cpf = ?";
    
        $stmt = $pdo->prepare($query);
        $stmt->bind_param("s", $cpf);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $saldo = $row['saldo'];
    
            // Calcula o valor a ser adicionado com base no número de refeições
            $valorAdicionar = $numeroRefeicoes * 2.5;
    
            $novoSaldo = $saldo + $valorAdicionar;
    
            // Atualiza o saldo na tabela 'saldo'
            $updateQuery = "UPDATE $tablenameSaldo
                            INNER JOIN $tablenameUsuarios ON $tablenameSaldo.usuario_id = $tablenameUsuarios.usuario_id
                            SET $tablenameSaldo.saldo = ?
                            WHERE $tablenameUsuarios.cpf = ?";
    
            $stmt = $pdo->prepare($updateQuery);
            $stmt->bind_param("is", $novoSaldo, $cpf);
            $stmt->execute();
    
            $resp = true;
            return $resp;
        } else {
            $resp = false;
            return $resp;
        }
    
        $stmt->close();
        $pdo->close();
    }
    
    
    // function retrievePassword ($email) {
        
    //     $pdo = new Connection();
    //     $pdo = $pdo->Connect();
    //     $query = "SELECT email FROM usuarios WHERE email = '$email'";
    //     $result = mysqli_query($pdo, $query);
    //     $pdo->close();
        
    //     if (mysqli_num_rows ($result) != 1) {
    //         return 0;
    //     }
        
    //     $result = mysqli_fetch_assoc($result);
    //     // fazer um fetch assoc e então retornar o campo de email;
    //     return $result ["email"];
    // }
    

    public function retrievePassword($email) {
        $pdo = new Connection();
        $conn = $pdo->Connect();
        
        // Use prepared statements to avoid SQL injection
        $query = "SELECT email FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows != 1) {
            return 0;
        }

        $stmt->bind_result($retrievedEmail);
        $stmt->fetch();
        $stmt->close();
        $pdo->close();

        return $retrievedEmail;
    }
    
}

 #Função para remover saldo do banco de dados - Feita por @XDougSa
 public static function removeCash($cpf) {
    $pdo = new connection();
    $pdo = $pdo->connect();

    $tablenameSaldo = "saldo";
    $tablenameUsuarios = "usuarios";

    // Consulta para obter o saldo e CPF do usuário
    $query = "SELECT $tablenameSaldo.saldo, $tablenameUsuarios.cpf 
              FROM $tablenameSaldo
              INNER JOIN $tablenameUsuarios ON $tablenameSaldo.usuario_id = $tablenameUsuarios.usuario_id
              WHERE $tablenameUsuarios.cpf = ?";

    $stmt = $pdo->prepare($query);
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $saldo = $row['saldo'];

        // Defina o valor da movimentação a ser removida
        $movimentacao = 2.5;

        // Verifica se o saldo é suficiente
        if ($saldo >= $movimentacao) {
            $saldo = $saldo - $movimentacao;

            // Atualiza o saldo na tabela 'saldo'
            $updateQuery = "UPDATE $tablenameSaldo
                            INNER JOIN $tablenameUsuarios ON $tablenameSaldo.usuario_id = $tablenameUsuarios.usuario_id
                            SET $tablenameSaldo.saldo = ?
                            WHERE $tablenameUsuarios.cpf = ?";

            $stmt = $pdo->prepare($updateQuery);
            $stmt->bind_param("is", $saldo, $cpf);
            $stmt->execute();
            $resp = true;
            return $resp;
        } else {
            $resp = false;
            return $resp;
        }
    }

$stmt->close();
$pdo->close();
}
?>

