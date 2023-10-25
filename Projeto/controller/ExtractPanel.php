<?php 
//Classe principal
class ExtractPanel{
    public function pullExtract($cpf) {
        include_once '../model/Data.php';

        $data = new Data();
        $result = $data->tableExtract($cpf);
        
        return $result;
    }
}
?>