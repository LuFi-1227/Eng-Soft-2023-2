<?php
require_once './utils/jwt.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./view/scripts/scripts.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<header>
    <div class="head-itens">
        <img src="./img/brasao_uft.webp" alt="">
        <?php
            if(isset($JWT)){
                //Exibe o nome da pessoa após o Olá de acordo com as variáveis salvas no vetor JWT na função login, by: @LuFi-1227
                $acesso = jwtObject::decode($JWT);//Chamando função estática;
                $nome = $acesso['nome'];//Salva a posição nome na variável $nome para exibir o nome no echo abaixo;
                echo"<div class='dropdown'>
                      <a class='btn dropdown-toggle' id='dropdown-user' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        <i class='fa-solid fa-user'></i> Olá, ".$nome."
                      </a>
                      <ul class='dropdown-menu'>
                        <li><a class='dropdown-item' href='../view/UserProfile.php'>Perfil</a></li>
                        <li><a class='dropdown-item' onclick='logout()'>Sair</a></li>
                      </ul>
                </div>";
            }
        ?>
        <!--Excluir o botão abaixo-->
        <!--<button type="button" class="btn btn-outline-dark" style="height: 50px;" onclick="sair()">Sair</button>-->
    </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // fUNÇÃO REALIZA O LOGOUT DO USUÁRIO FEITO POR LUIZ FELIPE SOUZA ALTERADO POR CÁSSIO
    function logout(){
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
     document.getElementById("btnLogout").onclick = logout;
</script>
    <script type="text/javascript">
    //REMOVER ESSA FUNÇÃO
//     function sair(){
//         newpopupWindow = window.open('', 'Fazer logOut?', "width=250 height=150");//Abre janela para fazer log out;
//         newpopupWindow.document.write("<h1 style='color:black; font-size:20px; text-align: center;'>Deseja deslogar da conta?</h1><a href='../controller/deslog.php?'><button btn-lg' type='submit' name='yes' style='background-color:red; width:90; height:30px; border:none; border-radius: 30px; color:white; text-align:center;  margin: 15px 15px;'>Sim</button></a> <a href='#' onclick='window.close()'><button type='submit' name='not' style='background-color:blue; width:90; height:30px; border:none; border-radius: 30px; color:white; text-align:center;'>Não</button></a>");//Formatação da janela de logOut;
//     }
// </script>