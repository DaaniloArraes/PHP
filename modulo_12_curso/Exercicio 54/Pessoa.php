<?php

    class Pessoa
    {
        public $nome = "Danilo";
        public $idade = 28;

        public function andar($x, Pessoa $pessoa){
            
            echo "O $pessoa->nome andou $x Metros ";
        }
    }


    $user = new Pessoa();
    $user->nome = "Dermival";
    $user->andar(100, $user);


