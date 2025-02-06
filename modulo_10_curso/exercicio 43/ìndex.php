<?php
    $string = "carro - navio - helicoptero - barco - jangada";
    $arraydeString = [explode("-", $string)];

    print_r($arraydeString);

    $string = implode("-", $arraydeString);

    echo $string;
?>