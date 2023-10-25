<?php
        include ("../controller/controlPanel.php");
        include ("./utils/session.php");
        $ctrl = new ControlPanel();
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $linha = $ctrl->pullData(1, $id);
        $vetor = mysqli_fetch_assoc($linha);
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php 
include "./components/header.php";
include ("./utils/session.php");
?>
<body>
    <div class="main">
        <div class="forms-itens">
            <form class="form-conteiner" action="../controller/editPass.php" method="post">
                <input type="hidden" name="id" value="<?php echo $vetor["usuario_id"]; ?>">
                <div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nova card-recuperar-senha</label>
                        <input type="text" class="form-control" name="Newpass" id="" aria-describedby="">
                    </div>
                </div>
                <div class="form-submit">
                    <button type="submit" name="enter" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    <?php include "./components/footer.html"?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
</html>