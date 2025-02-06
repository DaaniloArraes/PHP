<?php 
    $velodidadeAtual = 41;
    $limiteVelocidade = 40;


    if($velodidadeAtual < $limiteVelocidade){
        echo "Você está no limite de velocidade";
    }
    else if($velodidadeAtual == $limiteVelocidade){
        echo "Você está no limite de volidade, tome cuidado!";
    }
    else {
        echo "Voc^tomou uma multa por excesso de velocidade!";
    }
?>