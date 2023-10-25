<?php
    include ("./utils/session.php");
    require_once './utils/jwt.php';
    require_once("./utils/jwt.php");
    use \Firebase\JWT\JWT;
    use Firebase\JWT\Key;
    /*session_start();*/
    $JWT = $_SESSION["jwt"];
    $array = jwtObject::decode($JWT,  new Key ( "htsres", 'HS256'));
    $permissao = intval($array["perm"], 10);
    switch($permissao){
        case 1:
            header("Location: ./AdmUser.php");
            break;
        case 2:
            header("Location: ./AdmUser.php");
            break;
        case 3:
            header("Location: ./AdicionarSaldo.php");
            break;
        case 4:
            header("Location: ./AdicionarSaldo.php");
            break;
        case 6:
            break;
    } 
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php include "./components/header.php"?>
<body>
    <div class="main-profile">
        <!--ESSA SEÇÃO REALIZA A EXIBIÇÃO DOS DADOS NA TELA-->
            <div class="profile-content">
                <?php
                    include_once '../controller/controlPanel.php';
                    $ctrl = new ControlPanel();
                    $cpf = jwtObject::decode($JWT);
                    $result = $ctrl->pullData(0, $cpf['cpf']);
                    $result = mysqli_fetch_assoc($result);
                ?>
                <div class="profile-name">
                    <p><?php echo ($result['nome']); ?></p>
                </div>
                <div class="profile-data">
                    <tr>
                        <td> Nome: <?php echo ($result['nome']); ?> </td><br>
                        <td> CPF: <?php echo ($result['cpf']); ?> </td><br>
                        <td> E-mail: <?php echo ($result['email']); ?> </td><br>
                        <!--<td> Nº Matricula:<?php echo ($result['numMat']); ?> </td><br> Reativar quando houver numero de matrícula no Banco de Dados-->
                    </tr>
                </div>
            </div>
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
            </div>
    </div>
    <?php include "./components/footer.html"?>
</body>