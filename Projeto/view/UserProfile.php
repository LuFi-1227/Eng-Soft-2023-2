<?php
    session_start();
    include_once '../vendor/autoload.php';
    use \Firebase\JWT\JWT;
    use Firebase\JWT\Key;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Perfil</title>
</head>

<div class="main">
    <section>
        <div class="head-itens">
            <img src="./img/brasao_uft.webp" alt="">
            <a href="#"><i class="fa-solid fa-circle-user"></i></a>
        </div>
    </section>
    <!--ESSA SEÇÃO REALIZA A EXIBIÇÃO DOS DADOS NA TELA-->
    <section>
        <div class="profile-content">
            <?php
                include_once '../model/Data.php';
                $data = new Data();
                $result = $data -> ProfileUser();
                foreach ($result as $row) : ?>
                    <div class="profile-name">
                        <p><?php echo ($row['nome']); ?></p>
                    </div>
                    <div class="profile-data">
                        <tr>
                            <td> Nome: <?php echo ($row['nome']); ?> </td><br>
                            <td> CPF:<?php echo ($row['cpf']); ?> </td><br>
                            <td> E-mail:<?php echo ($row['email']); ?> </td><br>
                            <td> Nº Matricula:<?php echo ($row['numMat']); ?> </td><br>
                        </tr>
                    </div>
                   
                <?php endforeach;
            ?>
        </div>
    </section>
</div>
<footer class="footer">
    <div class="footer-itens">
        <img src="./img/brasao_uft.webp" alt="">
        <img src="./img/logocurso.png" alt="">
    </div>
    Engenharia de software 2023/2
</footer>
</body>
<?php
    session_destroy();
?>
