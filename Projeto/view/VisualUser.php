<?php
include("../controller/controlPanel.php");
include("./utils/session.php");
$ctrl = new ControlPanel();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$linha = $ctrl->pullData(1, $id);
$vetor = mysqli_fetch_assoc($linha);
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include "./components/header.php" ?>
<body>
<div class="main">
    <section>
        <a class="btn" id="return-btn" href="https://uftdevs.com.br/view/AdmUser.php" role="button">Voltar</a>
    </section>
    <div class="forms-itens">
        <form class="form-conteiner">
            <div>
                <div class="mb-3">
                    <label for="" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $vetor["nome"]; ?>"
                           readonly="readonly">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">CPF</label>
                    <input type="text" class="form-control" name="CPF" id="" value="<?php echo $vetor['cpf']; ?> "
                           readonly="readonly">
                </div>
            </div>

            <div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $vetor['email']; ?>" id=""
                           readonly="readonly">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Número de matricula</label>
                    <input type="text" class="form-control" name="numMat" valor="<?php echo "NULL"; ?>" id=""
                           readonly="readonly">
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label for="" class="form-label">Permissão</label>
                    <input type="text" class="form-control" name="perm" value="<?php echo $vetor['permissao']; ?>" id=""
                           readonly="readonly">
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "./components/footer.html" ?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
</html>