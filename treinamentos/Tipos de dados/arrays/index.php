<?php
$pessoa = [
    'Nome' => 'Danilo', 
    'idade' => 28, 
    'estadocivil' => 'só Deus na causa', 
    'estadoFinanceiro' => 'nem Deus na causa'
];

if($pessoa['idade'] < 28){
    echo 'Danilo não fez aniversario ainda';
}
else {
    echo'Danilo tem 28 anos';
}

?>