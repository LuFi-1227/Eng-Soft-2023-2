<?php
include("./utils/session.php");
require_once("./utils/jwt.php");
include_once '../vendor/autoload.php';

use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

/*session_start();*/
/*$JWT = $_SESSION["jwt"];
$array = jwtObject::decode($JWT,  new Key ( "htsres", 'HS256'));
$permissao = intval($array["perm"], 10);
switch($permissao){
     case 1:
         header("Location: ./AdmUser.php");
         break;
     case 2:
         header("Location: ./AdmUser.php");
         break;
     case 5:
         header("Location: ./UserProfile.php");
         break;
     case 6:
         break;
} */
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include "./components/header.php" ?>
<body>
<div class="main">
    <!--ESSA SEÇÃO REALIZA A EXIBIÇÃO DOS DADOS NA TELA-->
    <section>
        <div class="editCash">
            <form method="post">
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" required placeholder="CPF">
                </div>
                <div class="mb-3">
                    <label for="numeroRefeicoes" class="form-label">Número de Refeições:</label>
                    <input type="number" class="form-control" name="numeroRefeicoes" id="numeroRefeicoes" required
                           placeholder="Nº refeições">
                </div>
                <input class="btn btn-success" type="submit" name="addBalance" value="Adicionar Saldo">
            </form>
            <?php
            if (isset($_POST['addBalance'])) {
                $cpf = $_POST['cpf'];
                $numeroRefeicoes = $_POST['numeroRefeicoes'];
                $result = null;
                // Inclua o arquivo Data do diretório 'model'
                include_once('../model/Data.php');
                $data = new Data ();

                // Chame a função para adicionar saldo com base no CPF e no número de refeições
                $result = $data->adicionarSaldo($cpf, $numeroRefeicoes);
                echo "<script>window.onload = function() { RetunrResponse($result); };</script>";
            }
            ?>

        </div>
    </section>

</div>
<?php include "./components/footer.html" ?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    function RetunrResponse($result) {
        if ($result == true && $result != null) {
            Swal.fire({
                position: 'mid',
                icon: 'success',
                title: 'Recarga realizada!',
                showConfirmButton: false,
                timer: 1500
            })
        } else if ($result == false && $result != null) {
            Swal.fire({
                icon: 'error',
                title: 'CPF não encontrado!'
            })
        } else {

        }
    }

    window.addEventListener("load", RetunrResponse);
</script>