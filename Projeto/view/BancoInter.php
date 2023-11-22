<?php
    include_once '../vendor/autoload.php';
    require_once("./utils/jwt.php");
    include_once '../vendor/autoload.php';
    use \Firebase\JWT\JWT;
    use Firebase\JWT\Key;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Inter</title>
    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap');

body{
    margin: 0;
    font-family: 'Open Sans', sans-serif;
}

.main-inter{
    width: 100vw;
    height: 100vh;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
}

.left-inter{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.left-inter > h1 {
    font-size: 3vw;
    color: #000000;
}

.left-inter-image{
    width: 45vh;
}

.rigth-inter{
    width: 30vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-inter{
    width: 50%;
    height: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 30px 35px;
    background: #ed6948;
    border-radius: 20px;
    box-shadow: 0px 10px 40px #00000056;

}

.card-inter > h1 {
    color: #ffffff;
    font-weight: 800;
    margin: 0;
}

.textfield-inter{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    margin: 10px 0px;
}

.textfield-inter > input{
    width: 100%;
    border: none;
    border-radius: 10px;
    padding: 15px;
    background: #dad8de;
    color: #000000de;
    font-size: 12pt;
    box-shadow: 0px 10px 40px #00000056; 
    outline: none;
    box-sizing: border-box;
}

.textfield-inter > label{
    color: #f0ffffde;
    margin: 10px;
}

.textfield-inter > input::placeholder{
    color: #2318187f;
}

.btn-inter{
    width: 60%;
    padding: 16px 0px;
    margin: 25px;
    border: none;
    border-radius: 8px;
    outline: none;
    text-transform: uppercase;
    font-family: Verdana, Geneva;
    font-weight: 800;
    letter-spacing: 3px;
    color: #2b134b; 
    background: #00ff88;
    cursor: pointer; 
    box-shadow: 0px 10px 40px -12px #00ff8052;
}

.card-cartão {
    width: 300px;
    background-color: #ed6948;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    color: #fff;
  }
  
  .card-cartão-logo img {
    width: 60px;
    margin-left: 250px;
  }
  
  .card-cartão-number {
    font-size: 18px;
    margin: 20px 0;
  }
  
  .card-cartão-info {
    display: flex;
    justify-content: space-between;
  }
  
  .card-cartão-holder,
  .card-cartão-expiry {
    text-align: left;
  }
  
  label {
    display: block;
    font-size: 12px;
    margin-bottom: 4px;
    color: rgba(255, 255, 255, 0.8);
  }
  
  span {
    display: block;
    font-size: 14px;
  }
  

    </style>
</head>
<body>
    <div class="main-inter">
        <div class="left-inter">
            <img src="./img/logo_inter.png" class="left-inter-image" alt="logo inter ">
            <h1>Bem-vindo <br>Finalize sua recarga com pix!</h1>
            <div class="card-cartão">
                <div class="card-cartão-logo">
                  <img src="./img/Mastercard_logo.0.png" alt="Mastercard Logo">
                </div>
                <div class="card-cartão-number">
                  <span>**** **** **** 1234</span>
                </div>
                <div class="card-cartão-info">
                  <div class="card-cartão-holder">
                    <label>Titular do Cartão</label>
                    <span>Fulano da Silva</span>
                  </div>
                  <div class="card-cartão-expiry">
                    <label>Expira em</label>
                    <span>12/24</span>
                  </div>
                </div>
            </div>
        </div>
        <div class="rigth-inter">
            <div class="card-inter">
                <h1>Inter</h1>
                <form method="post">
                    <div class="textfield-inter">
                        <label for="usuario">CPF do Usuário:</label>
                        <input type="text" name="usuario" id="usuario" placeholder="000.000.000-00" required>
                    </div>
                    <div class="textfield-inter">
                        <label for="saldo">Valor da Recarga:</label>
                        <input type="text" name="valor" id="valor" placeholder="R$" required>
                        </div>
                    <input type="submit" id="btn" name="enter" class="btn-inter" value="pagar">
                </form>
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enter'])) {
                            $cpf = $_POST['usuario'];
                            $valor_deposito = $_POST['valor'];
                            $result = null;
                            // Inclua o arquivo Data do diretório 'model'
                            include_once('../model/Data.php');
                            $data = new Data ();
                    
                            // Chame a função para adicionar saldo com base no CPF e no número de refeições
                            $result = $data -> adicionarSaldo($cpf, ($valor_deposito/2.5));
                            echo "<script>window.onload = function() { RetunrResponse($result); };</script>";
                        }
                    ?>

            </div>
        </section>
        
    </div>

</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    
function RetunrResponse($result){
    if($result == true && $result != null){
        Swal.fire({
          position: 'mid',
          icon: 'success',
          title: 'Recarga realizada!',
          showConfirmButton: false,
          timer: 3000
        })
    }else if($result == false && $result != null){
        Swal.fire({
            icon: 'error',
            title: 'CPF não encontrado!'
        })
    }else{
        
    }
}
    window.addEventListener("load", RetunrResponse);
</script>
