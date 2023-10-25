<?php
    include ("./utils/session.php");
    require_once("./utils/jwt.php");
    /*$array = jwtObject::decode($JWT);
    $permissao = intval($array["perm"], 10);
    switch($permissao){
        case 3:
            header("Location: ./AdicionarSaldo.php");
            break;
        case 4:
            header("Location: ./AdicionarSaldo.php");
            break;
        case 5:
            header("Location: ./UserProfile.php");
            break;
        case 6:
            break;
    }Trecho de código para redirecionar para página correta;*/
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include "./components/header.php";
?>
<body>
    <div class="main">
        <section>
            <div class="search-itens">
                <form class="search-form" method="post" action="">
                    <div class="mb-3 search-input">
                        <label for="" class="form-label">Buscar</label>
                        <input type="text" name="CPF" class="form-control" id="" aria-describedby="">
                    </div>

                    <div class="search-btn">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary" name="Search">Buscar</button>
                            <button type="submit" class="btn btn-primary btn-lg" id="btn-register" name="Register">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section>
            <div class="table-content">
                <table>
                    <tr>
                        <th>Nº</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th class="table-icon-width">Permissão</th>
                        <th>Alterar dados</th>
                    </tr>
                    <?php
                    include_once '../model/Data.php';
                        if(isset($_POST['Search']) && isset($_POST['CPF']) && !empty($_POST['CPF'])){
                            $data = new Data();
                            $list = $data->table($_POST['CPF']);
                            resultados($list);
                        }else{
                            if(isset($_POST['Register'])){
                                echo "<script>window.location.href = `CadstroUsuario.php`</script>";
                            }else{
                                $data = new Data();
                                $result = $data->tableC();
                                resultados($result);
                            }
                        }
                        function resultados($data){
                            $i = 1;
                            while($res = mysqli_fetch_assoc($data)){
                                echo 
                                    "<tr>
                                        <th>".$i."</th>
                                        <td>".$res['nome']."</td>
                                        <td>".$res['email']."</td>
                                        <td class='table-icon-width'>".$res['permissao']."</td>
                                        <td>
                                            <a href='./VisualUser.php?id=".$res['usuario_id']."'><i id='icon-plus' class='fa-solid fa-plus'></i></a>
                                            <a href='./EditUser.php?id=".$res['usuario_id']."'><i id='icon-pencil' class='fa-regular fa-pen-to-square'></i></a>
                                            <button id='icon-trash' type='submit' name='lix' onclick='DeleteUser(".$res['usuario_id'].")'><i class=' fa-solid fa-trash'></i></button>
                                        </td>
                                    </tr>";
                                $i = $i + 1;
                            }
                        }
                    ?>
                </table>
            </div>
        </section>
    </div>
    <?php include "./components/footer.html"?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
<script type="text/javascript">
function DeleteUser(objeto){
    Swal.fire({
      title: 'Deseja deletar o usuário?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Confirmar'
    }).then((result) => {
      if (result.isConfirmed) {
       window.location.href = `../controller/deletPanel.php?id=${objeto}`;
      }
    })
}
    document.getElementById("btnLogout").onclick = DeleteUser;
</script>
</html>