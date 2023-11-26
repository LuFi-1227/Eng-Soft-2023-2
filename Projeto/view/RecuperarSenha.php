<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include("../controller/controlPanel.php");
    $con = new ControlPanel();
    $con->retrievePassword($_POST['email']);
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include "./components/header.php" ?>

<body>
<div class="main">
    <div class="main-content">
        <div class="main-container">
            <div class="image">
                <img src="./img/brasao_uft.webp"
                     alt="Logo da Universidade Federal do Tocantins">
            </div>
            <div class="main-itens">
                <form id="form" method="POST">
                    <div class="btn-login textfield">
                        <label for="" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Digite seu e-mail" name="email" required>
                    </div>
                    <input type="submit" id="btn" name="enter" class="btn btn-success" value="Enviar">
                </form
            </div>
        </div>
    </div>
</div>
<?php include "./components/footer.html" ?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>

</html>