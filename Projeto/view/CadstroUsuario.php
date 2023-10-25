<!DOCTYPE html>
<html lang="pt-br">
<?php 
include "./components/header.php";
include ("./utils/session.php");
?>
<body>
    <div class="main">
        <div class="forms-itens">
            <form class="form-conteiner" action="../controller/CadPanel.php" method="post">
                <div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">CPF</label>
                        <input type="text" class="form-control" name="CPF" id="" aria-describedby="">
                    </div>
                </div>
                <div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Número de matricula</label>
                        <input type="text" class="form-control" name="numMat" id="" aria-describedby="">
                    </div>
                </div>
                <div class="form-submit">
                    <select class="form-select" name="optione" aria-label="Permissão">
                        <option selected>Permissão</option>
                        <option value="1">Adm</option>
                        <option value="2">Usuário</option>
                        <option value="3">Atendente</option>
                    </select>
                    <button type="submit" name="enter" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    <?php include "./components/footer.html"?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
</html>