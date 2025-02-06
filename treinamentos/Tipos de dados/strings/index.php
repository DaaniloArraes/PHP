<?php
echo "Baum dia aspas duplas <br>";
echo 'Baum dia aspas simples<br>';
echo 'testando com "aspas duplas" dentro da simples<br>';
echo "testando com 'aspas simples' dentro da duplas<br>";
$idade = 5;


$idadestring = "ele tem a idade de $idade anos";

if(is_string($idade)){

echo "sim";

}
else if(is_string($idadestring)){
    echo "idade em string é uma String: $idadestring";
}



?>