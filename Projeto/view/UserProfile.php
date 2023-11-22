<?php
    include ("./utils/session.php");
    require_once("./utils/jwt.php");
    use \Firebase\JWT\JWT;
    use Firebase\JWT\Key;
    /*session_start();*/
    $JWT = $_SESSION["jwt"];
    $array = jwtObject::decode($JWT,  new Key ( "htsres", 'HS256'));
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include "./components/header.php"?>
<body>
    <div class="main-profile">
        <div class="profile-content">
            <?php
                include_once '../controller/controlPanel.php';
                $ctrl = new ControlPanel();
                $cpf = jwtObject::decode($JWT);
                $result = $ctrl->pullData(0, $cpf['cpf']);
                $result = mysqli_fetch_assoc($result);
            ?>
            <div class="profile-name">
                <p>USUÁRIO</p>
            </div>
            <div class="profile-data">
                <div>
                    <p> Nome: <?php echo ($result['nome']); ?> </p>
                    <p> CPF: <?php echo ($result['cpf']); ?> </p>
                    <p> E-mail: <?php echo ($result['email']); ?> </p>
                    <p> ID: <?php echo ($result['usuario_id']); ?> </p>
                    <p> Status cartão: <?php echo ($result['cartao_status']); ?> </p>
                    <button id="btnBloquearCartao" onclick='bloquearCartao(<?php echo ($result['usuario_id']); ?>)' class="btn btn-primary"><?php if($result['cartao_status'] == 0) echo "Bloquear cartão <i class='fa-solid fa-lock'></i></button>"; else echo "Desbloquear cartão <i class='fa-solid fa-lock-open'></i>"; ?> </button>
                    <button id="btnDeleteUser" onclick='DeleteUser(<?php echo ($result['usuario_id']); ?>)' class="btn btn-danger">Deletar perfil <i class='fa-solid fa-trash'></i></button>
                    <form action="./Recarrega.php" method="post">
                        <input type="hidden" name="cpf" value="<?php echo $cpf['cpf']; ?>">
                        <button style="margin-top: 5px;" class="btn btn-success">Recarregar <i style="color: #fff;" id='icon-cash' class='fa fa-dollar'></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="profile-content">
            <div class="profile-name">
                <p>FOTO</p>
            </div>
            <div class="profile-data">
                <!-- Adição da opção de upload de foto -->
                <form action="../controller/uploadPhoto.php" method="post" enctype="multipart/form-data">
                    <label for="photo">Escolha uma foto:</label>
                    <input type="file" name="photo" id="photo" accept="image/*">
                    <input type="submit" value="Enviar Foto" class="btn btn-primary">
                </form>
                <!-- Exibição da foto atual do usuário -->
                <!-- Botão para excluir a foto -->
                <button id="btnDeletePhoto" onclick='deletePhoto()' class="btn btn-danger">Excluir Foto <i class='fa-solid fa-trash'></i></button>
                 <?php
                    $photoPath = $result['photo_path'] ?? '../view/img/brasao_uft.ico';
                    echo "<img src='$photoPath' alt='User Photo' class='user-photo'>";
                ?>
            </div>
        </div>
        
        <!-- Saldo -->
        <div class="profile-content">
            <div class="profile-name">
                <p>SALDO</p>
            </div>
            <div class="profile-saldo">
                <?php
                    include_once '../controller/ExtractPanel.php';
                    $data = new Data();
                    $dados = $data->tableExtract($cpf['cpf']);
                    $res = mysqli_fetch_assoc($dados);
                    
                    if (!$res){
                        echo "R$00,00";
                    }
                    else{
                        $res['saldo'] = number_format($res['saldo'], 2, ',', '.');
                        echo "R$".$res['saldo'];
                    }
                ?>
            </div>
            <div class="profile-data">
                <table class="tabela-extrato">
                    <tr>
                        <th>Data</th>
                        <th>Movimentação (R$)</th>
                        <th>Saldo (R$)</th>
                    </tr>
                    <?php
                        $dados = $data->tableExtract($cpf['cpf']);
                        if ($dados){
                            tableShow($dados);
                        }
                    
            
                        function tableShow($result) {
                            while ($res = mysqli_fetch_assoc($result)){
                                $res['saldo'] = number_format($res['saldo'], 2, ',', '.');
                                echo "<tr>
                                    <td>".$data = implode("/",array_reverse(explode("-",$res['data_atualizacao'])))."</td>
                                    <td>".$res['saldo']."</td>
                                    <td>".$res['saldo']."</td> 
                                </tr>";
                            }
                        }
                    ?>
                </table>
            </div>
            <div>
                <a href="./Recarrega.php"><button class="btn btn-primary">Recarregar</button></a>
            </div>
        </div>
    </div>
    <?php include "./components/footer.html"?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function bloquearCartao(usuario_id) {
        window.location.href = '../controller/bloquearCartao.php?id=${usuario_id}';
    }

    function logout() {
        Swal.fire({
            title: 'Deseja sair?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../controller/deslog.php';
            }
        })
    }

        
    function DeleteUser(objeto) {
        Swal.fire({
            title: 'Deseja deletar o usuário?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../controller/deleteUser.php?id="${objeto}"';
            }
        })
    }

    function deletePhoto() {
        Swal.fire({
            title: 'Deseja excluir a foto?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../controller/deletePhoto.php';
            }
        })
    }
document.getElementById("btnDeleteUser").onclick = DeleteUser;
document.getElementById("btnBloquearCartao").onclick = bloquearCartao;
  
  
</script>
