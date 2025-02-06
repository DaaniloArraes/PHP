<?php
    $rato = "O rato roeu a roupa do rei de roma";
    $rei = "";
    for ($i = 0; $i < strlen($rato); $i++){
        if($rato[$i] == "a") $rei = $rei . $rato[$i] ;
    }

    echo strlen($rei);


?>