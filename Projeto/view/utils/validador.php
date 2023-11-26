<?php
class validador{
    public static function validaCPF($number){
        $cpf = preg_replace('/[^0-9]/', "", $number);

        if(strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)){
            return 0;
        }

        $number_quantity_to_loop = [9, 10];

        foreach ($number_quantity_to_loop as $item) {
            $sum = 0;
            $number_to = $item + 1;

            for ($index = 0; $index < $item; $index++) {

                $sum += $cpf[$index] * ($number_to--);

            }

            $result = (($sum * 10) % 11);
            if($cpf[$item] != $result){
                return 0;
            }
        }

        return 1;
        //Fonte: https://hcode.com.br/blog/criando-funcao-em-php-para-validar-cpf (Ain, se não tiver comentário no código eu choro)
    }
}
?>