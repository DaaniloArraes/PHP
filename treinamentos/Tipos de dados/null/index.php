<?php

echo null;
echo "<br>";
$nome = null;


if (is_null($nome)){
    echo 'nome é nulo';
    echo "<br>";
}

echo $nome;
echo "<br>";
$nome = 'Danilo';

if (!is_null($nome)){
    echo 'nome não é nulo';
    echo "<br>";
}

echo $nome;