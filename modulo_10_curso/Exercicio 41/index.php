<?php
    $str = "este item está em promoção";


    $localizador = 0;

    for ($i = strlen($str); $i >0 ; $i--) {
        if($str[$i - 1] == " ") {
            $localizador = $i;
            break;
        }
    }

    echo  ucfirst(substr($str,0,$localizador) .
        strtoupper(substr($str,$i)));
?>