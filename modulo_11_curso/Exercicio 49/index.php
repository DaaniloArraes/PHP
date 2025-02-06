<?php
    $mouse = "Multilaser";
    $teclado = "HyperX";
    $cpu = "Dell";

    $arr = compact("mouse","teclado", "cpu");


    foreach( $arr as $computador => $valores ) {
       echo"". $computador ." ". $valores ." <br>";
    }
?>