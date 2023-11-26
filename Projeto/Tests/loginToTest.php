<?php
include_once("../controller/ControlPanel.php");
include_once '../vendor/autoload.php';
include_once("../view/utils/validador.php");

use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

session_start();
/*if(isset($_SESSION['jwt'])){
    $JWT = $_SESSION['jwt'];
    require_once("./utils/jwt.php");
    $array = jwtObject::decode($JWT);
    $permissao = intval($array["perm"], 10);
    switch($permissao){
        case 1:
            header("Location: ./AdmUser.php");
            break;
        case 2:
            header("Location: ./AdmUser.php");
            break;
        case 3:
            header("Location: ./AdicionarSaldo.php");
            break;
        case 4:
            header("Location: ./AdicionarSaldo.php");
            break;
        case 5:
            header("Location: ./UserProfile.php");
            break;
        case 6:
            break;
    }
}Trecho de código para redirecionar para página correta;*/
if ($_POST) {
    // inicializa variáveis
    $cpf = "";
    $password = "";

    // se o usuário digitou os campos eles são alocados nas variáveis

    if (isset ($_POST ["cpf"]) && isset ($_POST ["password"])) {
        $cpf = $_POST ["cpf"];
        $password = $_POST ["password"];
        fazerLogin($cpf, $password);
    }
}
?>
<html lang="pt-br">
<head>
    <title>RU-COINS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../view/css/style.css">
</head>

<body>
<div class="main">
    <div class="main-content">
        <div class="main-container">
            <div class="image">
                <img src="../view/img/brasao_uft.webp"
                     alt="Logo da Universidade Federal do Tocantins">
            </div>
            <div class="main-itens">
                <form id="form" method="POST">
                    <div class="btn-login textfield">
                        <label for="" class="form-label">CPF:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Digite seu CPF (apenas números)" name="cpf" maxlength="11" required pattern="[0-9]+$">
                    </div>
                    <div class="btn-login textfield">
                        <label for="" class="form-label">Senha:</label>
                        <input type="password" class="form-control" placeholder="Digite sua senha" name="password" required>
                    </div>
                    <input type="submit" id="btn" name="enter" class="btn btn-success" value="Entrar">
                    <input type="submit" id="btn" name="forgotPass" class="btn btn-secondary" value="Esqueci a Senha">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "../view/components/footer.html" ?>
</body>
</html>

<?php
function fazerLogin($cpf, $password)
{
    // inicializa um objeto da control panel
    $flag = validador::validaCPF($cpf);
    if ($flag) {
        $controlPanel = new ControlPanel ();
        if (!$controlPanel->login($cpf, $password)) {
            echo("<script language = 'javascript'> alert ('Usuário ou senha incorretos') </script>");
            return 0;
        }
        return 1;
    } else {
        echo("<script>alert('CPF inválido')</script>");
        return 0;
    }
}
?>