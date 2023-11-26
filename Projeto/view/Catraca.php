<?php

//Tela catraca feita por Patryck Henryck _@PHmore

include_once './utils/session.php';
require_once './utils/jwt.php';
include_once '../model/attendantData.php';

$ctrl = new Data();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Cobrar']) && isset($_POST['CPF']) && !empty($_POST['CPF'])) {
        if ($ctrl->removeCash($_POST['CPF'])) {
            $_SESSION['mensagem'] = '
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function mostrarPassagemLiberada() {
                    Swal.fire({
                        title: "Passagem Liberada",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
                mostrarPassagemLiberada();
            </script>';
        } else {
            $_SESSION['mensagem'] = '
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function mostrarPassagemNegada() {
                    Swal.fire({
                        title: "Passagem Negada",
                        text: "Saldo insuficiente",
                        icon: "error",
                        confirmButtonColor: "#3085d6",
                        confirmButtonText: "OK"
                    });
                }
                mostrarPassagemNegada();
            </script>';
        }

        header("Location: " . $_SERVER['PHP_SELF']); // Redireciona para a mesma página
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./components/header.php" ?>
<body>
<div class="main">
    <section>
        <div class="cobrar-itens">
            <form class="cobrar-form" method="post" action="" id="cobrarForm">
                <div class="mb-3 cobrar-input">
                    <label for="" class="form-label">Buscar</label>
                    <input type="text" name="CPF" class="form-control" id="" aria-describedby="">
                </div>

                <div class="cobrar-btn">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary btn-lg" id="btn-Cobrar" name="Cobrar">Cobrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <?php
        if (isset($_SESSION['mensagem'])) {
            echo '<div class="mensagem">' . $_SESSION['mensagem'] . '</div>';
            unset($_SESSION['mensagem']); // Limpa a mensagem
        }
        ?>
    </section>
</div>
<?php include "./components/footer.html" ?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
<script>
    function logout() {
        Swal.fire({
            title: 'Deseja sair?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../controller/deslog.php';
            }
        })
    }
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Por exemplo:
    echo '
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function mostrarPassagemLiberada() {
                    Swal.fire({
                        title: "Passagem Liberada",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
                mostrarPassagemLiberada();
            </script>';
}
?>


</html>