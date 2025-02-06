<?php
    $teste = range(10, 45);

    for( $i = 0; $i < count($teste); $i++ ) {
        if( $teste[$i] > 30 ) echo "Numero é muito alto <br>";
        else echo $teste[ $i ] +6 . "<br>";
    }

?>