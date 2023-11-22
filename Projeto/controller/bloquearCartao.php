<?php
    include_once '../model/Data.php';
    
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
     var_dump ($id);
    
    if ($id !== null) {
        if (Data::bloquearCartao($id)) {
    } else {
        // ID é nulo, trata de acordo (por exemplo, exibe uma mensagem de erro)
        echo "ID inválido.";
        echo ($id);
    }}
?>