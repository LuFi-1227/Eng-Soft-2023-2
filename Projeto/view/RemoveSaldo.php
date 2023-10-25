<?php
    include ("./utils/session.php");
    require_once("./utils/jwt.php");
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
<!-- FUNÇÃO REMOVER SALDO, FEITA POR @XDougsa -->
<html lang="pt-br">
    <?php include "./components/header.php"?>
<body>
    <div class="main">
        <!--ESSA SEÇÃO REALIZA A EXIBIÇÃO DOS DADOS NA TELA-->
        <section>
            <div class="cpfCash">
                <form method="post">
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" required placeholder="CPF">
                        <input class="btn btn-danger" id = "remove" type="submit" name="removeBalance" value="Remover Saldo">
                    </div>
                </form>  
                <?php
                    if (isset($_POST['removeBalance'])){
                        $cpf = $_POST['cpf'];
                        $result = null;
                        include_once '../model/Data.php';
                        $result = Data::removeCash($cpf);
                        echo "<script>window.onload = function() { RemoveReturn($result); };</script>";
                    }
                ?>
            </div>
        </section>
    </div>
    <?php include "./components/footer.html"?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function RemoveReturn($result){
        if($result == true && $result != null){
            Swal.fire({
              position: 'mid',
              icon: 'success',
              title: 'Cobrança realizada!',
              showConfirmButton: false,
              timer: 1500
            })
        }else if($result == false && $result != null){
            Swal.fire({
                icon: 'error',
                title: 'Erro'
            })
        }else{
            
        }
    }
    window.addEventListener("load", RetunrResponse);
</script>