<?php 
    $arr = [[1,2,3,4], [4,5,6,9], [7,8,9,10]];
    for( $i = 0; $i < count($arr); $i++ ) {
        echo "Acessando nova array". "<br>";
        for($y = 0; $y < count($arr[$i]); $y++ ){

            echo $arr[$i][$y] . "<br>";
        }    
    }


?>
