<?php
class Pessoa{

    public $nome;

    function falar(){
        echo "olá ";
    }
}

$humano = new Pessoa();

$humano->falar();


$humano->nome = 'danilo';

echo $humano->nome;

?>