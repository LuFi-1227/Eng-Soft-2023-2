<?php
include_once "../vendor/autoload.php";
include_once "./loginToTest.php";

use \PHPUnit\Framework\TestCase;

class loginTest extends TestCase {
    public function assertFunc($expected, $realValue){
        $this->assertSame($expected, $realValue);
    }

    public function testLogin(){
        $file = fopen("Testador de login - Página1.csv", "r");
        $result = array();
        $i = 0;
        while (!feof($file)):
            if (substr(($result[$i] = fgets($file)), 0, 10) !== ';;;;;;;;') :
                $i++;
            endif;
        endwhile;
        $S = str_replace('"', "", json_encode($result));
        $S = str_replace('\r', "", $S);
        $S = str_replace('[', "", $S);
        $S = str_replace(']', "", $S);
        $S = str_replace('\n', "", $S);
        $ob = explode(",", $S);
        $tamanho = count($ob);

        for($i=0; $i<$tamanho; $i = $i+2){
            echo "CH";
            $this->assertFunc(fazerLogin($ob[$i], "senha"), intval($ob[$i+1]));
        }
    }
}
?>
