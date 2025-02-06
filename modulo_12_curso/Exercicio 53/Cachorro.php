<?php

class Cachorro
{
    function latir(){
        echo "Au AU" . "<br>";
    }

    function andar (){
        echo "pi pipi";
    }

}

$pinscher = new Cachorro();
$labrador  = new Cachorro();


$pinscher->latir();
$labrador-> andar();
