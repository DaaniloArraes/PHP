<?php
    function exercicio36(array $lista) {
        $x = [];
        for($i = 0; $i< count(value: $lista); $i++ ){
            if($lista[$i] > 7){
                array_push($x, $lista[$i]);
            }
        } 
        return $x;
    }

    $y = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
    ;

    $x = implode(",", exercicio36($y));
    echo $x;
