<?php


/*    function somaElementos(array $element) {

        return  array_sum($element);
    }
    $valor = range(1,100);
    echo somaElementos($valor);


    function maiorElemento(array $element) {
        return max($element);
    }    

    $numeros =  range(1,100);
    echo maiorElemento($numeros);

    function encontrarPares(array $element) {
        $pares = [] ;
        for ($i = 0; $i < count($element); $i++) {	
            if($element[$i] % 2 ==0) array_push($pares , $element[$i]);
        }   
        return $pares ;
    }

    $numeros =  range(1,100);

    print_r(encontrarPares($numeros)) ;

    */

    function ordenarNumeros(array $data): array{
        asort($data);
        return $data ;
    }
    $numeros = [2, 12, 23, 11, 6, 5, 18, 24, 29, 1, 3, 31, 17];


    print_r(ordenarNumeros($numeros));


?>