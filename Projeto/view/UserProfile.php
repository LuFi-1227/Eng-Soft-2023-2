<?php
    include ("./utils/session.php");
    require_once './utils/jwt.php';
    require_once("./utils/jwt.php");
    /*$array = jwtObject::decode($JWT);
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
        case 6:
            break;
    } Trecho de código para redirecionar para página correta;*/
?>
<!DOCTYPE html>
<html lang="pt-br">

    <?php include "./components/header.php"?>
<body>
    <div class="main">
        <!--ESSA SEÇÃO REALIZA A EXIBIÇÃO DOS DADOS NA TELA-->
        <section>
            <div class="profile-content">
                <?php
                    include_once '../controller/controlPanel.php';
                    $ctrl = new ControlPanel();
                    $cpf = jwtObject::decode($JWT);
                    $result = $ctrl->pullData(0, $cpf['cpf']);
                    $result = mysqli_fetch_assoc($result);
                ?>
                <div class="profile-name">
                    <p><?php echo ($result['nome']); ?></p>
                </div>
                <div class="profile-data">
                    <tr>
                        <td> Nome: <?php echo ($result['nome']); ?> </td><br>
                        <td> CPF:<?php echo ($result['cpf']); ?> </td><br>
                        <td> E-mail:<?php echo ($result['email']); ?> </td><br>
                        <!--<td> Nº Matricula:<?php echo ($result['numMat']); ?> </td><br> Reativar quando houver numero de matrícula no Banco de Dados-->
                    </tr>
                </div>
            </div>
        </section>
    </div>
    <?php include "./components/footer.html"?>
</body>
