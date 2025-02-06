<?php 
    $arr = ["Batata", "Maça", "Pera", "Feijão", "Arroz"] ;
    $removidos = array_splice($arr,2,2) ;
    
    print_r($removidos);
    echo "<br>";

    print_r($arr);
?>