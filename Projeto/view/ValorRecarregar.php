<!DOCTYPE html>
<html lang="pt-br">
    <?php include "./components/header.php"?>
<body>
    <div class="main">
        <section>
            <div class="editCash">
                <h2>Quantas refeições deseja adicionar ao saldo?</h2>
                <form action="./RecarregaBoleto.php" method="post">
                    <div class="mb-3">
                        <label for="numeroRefeicoes" class="form-label">Número de Refeições:</label>
                        <input type="number" class="form-control" name="numeroRefeicoes" id="numeroRefeicoes" required placeholder="Nº refeições">
                        <input type="hidden" name="cpf" value="<?php echo $_POST['cpfRecarregar']; ?>">
                    </div>
                    <input class="btn btn-success" type="submit" name="addSaldo" value="Prosseguir">
                </form>  
            </div>
        </section>
        
    </div>
    <?php include "./components/footer.html"?>
</body>