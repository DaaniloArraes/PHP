<?php


$numero1 = 10;
$numero2 = 100;

$string1 = "teste 1"; 
$string2 = "teste 2";

if(is_int($numero1)){
    $localvariavel = $numero1 * 2;
    if($localvariavel >25){
        echo "O numero ". $localvariavel ." é maior que 15." ;
    }

    else{
        echo "O numero não é maior que 15";
    }
}
else{
    echo "Não é um numero";
}

?>