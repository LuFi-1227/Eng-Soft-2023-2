<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleto</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .pagar-boleto {
            margin: 5px 0 0 45%;
            height: 30px;
            width: 130px;
            font-size: 18px;
            background-color: #3CB371;
            color: #fff;
            border: 3px solid #3CB371;
            border-radius: 6px;
        }

        .pagar-boleto:hover {
            border: 2px solid #00A148;
        }

        .boleto {
            width: 750px;
            margin: 10px auto;
            padding: 20px;
            border: 2px solid #000;
            background-color: #fff;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
            display: flex;
            flex-direction: column;
        }

        .topo-boleto {
            display: flex;
        }

        .logo {
            width: 110px;
            height: 70px;
            margin-bottom: 20px;
        }

        .linha-caixa {
            border-bottom: 1px solid #000;
            margin-bottom: 10px;
        }

        .linha-digitavel {
            font-size: 20px;
            margin-bottom: 20px;
            margin-top: 30px;
            margin-left: 10px;
            white-space: nowrap;
        }

        .beneficiario {
            margin-bottom: 10px;
        }

        .informacoes {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .informacoes div {
            flex: 1;
            justify-content: center;  
        }

        .valor {
            margin-left: 25px;
        }

        .instrucoes {
            padding: 0 0 20px 0;
        }

        .codigo-barras {
            width: 700px;
        }

        .codigo {
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <?php include "./components/header.php" ?>
    </header>
    <div id="main">
        <form action="../controller/recarregamentoControl.php" method="post">
            <input type="hidden" name="numeroRefeicoes" value="<?php echo $_POST['numeroRefeicoes']; ?>">
            <input type="hidden" name="cpf" value="<?php echo $_POST['cpf']; ?>">
            <button name="pagar-boleto" class="pagar-boleto">Pagar Boleto</button>
        </form>

        <div id="main-content">
            <div class="boleto">
                <div class="topo-boleto">
                    <img src="./img/marcaUFT.png" alt="Logo UFT" class="logo">
                    <div class="linha-digitavel">
                        <strong>|006-3|</strong>  001 9 05009 5 4014481606 9 0680935031 4 3 0000000100
                    </div>
                </div>

                <div class="linha-caixa"></div>

                <div class="beneficiario">
                    <strong>Beneficiário:</strong>
                    Restaurante Universitário - UFT
                    / 
                    CNPJ: 38.178.825/0001-73 
                </div>

                <div class="linha-caixa"></div>

                <div class="informacoes">
                    <div>
                        <strong>Data do Documento:</strong> 
                        <?php 
                            date_default_timezone_set('America/Sao_Paulo');
                            $dataAtual = new DateTime();
                            $dataFormatada = $dataAtual->format('d/m/Y (H:i)'); 
                            echo $dataFormatada;
                        ?><br>
                        <strong>Vencimento:</strong> 
                        <?php 
                            $dataAtual = new DateTime();
                            $dataAtual->modify('+1 hour');
                            $dataFormatada = $dataAtual->format('d/m/Y (H:i)');
                            echo $dataFormatada;
                        ?>
                    </div>
                    <div class="valor">
                        <strong>Valor Cobrado:</strong>
                        <?php echo "R$".number_format(($_POST['numeroRefeicoes'] * 2.5), 2, ','); ?>
                    </div>
                    <div>
                        <strong>Local de Pagamento:</strong><br>
                        Pagável em qualquer banco até o vencimento.
                    </div>
                </div>

                <div class="linha-caixa"></div>

                <div class="instrucoes">
                    <strong>Instruções:</strong><br>
                    - Não receber após o vencimento;<br>
                    - Você tem uma hora para efetuar o pagamento, como mostrado no campo <strong>Vencimento</strong>;
                </div>

                <div class="linha-caixa"></div>

                <div class="codigo">
                    <img src="./img/barcode.png" alt="Código de barras" class="codigo-barras">
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <?php include "./components/footer.html" ?>
    </footer>
</body>
</html>