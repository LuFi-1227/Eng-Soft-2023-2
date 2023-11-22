<?php
    if (isset($_POST['pagar-boleto'])){
        require_once "../model/Data.php";
        $data = new Data();
        
        $cpf = $_POST['cpf'];
        $refeicoes = $_POST['numeroRefeicoes'];
        //Adiciona o saldo na conta do usuário logado
        $data->adicionarSaldo($cpf, $refeicoes);

        //Depois de adicionar o saldo, redireciona para o perfil do usuário novamente
        header("Location: ../view/UserProfile.php");
    }
?>