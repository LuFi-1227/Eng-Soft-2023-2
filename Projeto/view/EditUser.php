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
<?php include "./components/header.php"?>

<body>
     <section>
                <a class="btn" id="return-btn" href="https://uftdevs.com.br/view/AdmUser.php" role="button">Voltar</a>
        </section>
    <div class="main">
        <div class="forms-itens">
            <form class="form-conteiner" action="../controller/editPanel.php" method="post">
            <input type="hidden" name="id" value="<?php echo $vetor["usuario_id"]; ?>">
                <div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $vetor["nome"]; ?>" id="" aria-describedby="" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">CPF</label>
                        <input type="text" class="form-control" name="CPF" id="" value="<?php echo $vetor['cpf']; ?> " aria-describedby="" required>
                    </div>
                </div>

                <div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $vetor['email']; ?>" id="" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Número de matricula</label>
                        <input type="text" class="form-control" name="numMat" valor="<?php echo "NULL"; ?>" id="" aria-describedby="">
                    </div>
                </div>
                <div class="form-submit">
                    <select class="form-select" name="optione" aria-label="Permissão" required>
                        <option selected><?php echo $vetor['permissao']; ?></option>
                        <option value="1">Adm</option>
                        <option value="2">Usuário</option>
                        <option value="3">Atendente</option>
                    </select>
                    <button type="submit" name="enter" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
    <?php include "./components/footer.html"?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
</html>