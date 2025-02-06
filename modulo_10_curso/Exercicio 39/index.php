<?php


        function exercicio39(array $valor):array{
            
            $retorno = [] ;
            foreach($valor as $item => $preco){
                if($preco > 80){
                    array_push($retorno , $item);
            
                }
            }
            return $retorno;
        }

        $array = [
            "Carro" => 100.00, 
            "Moto" => 100.00,
            "Caminhão" => 300.00, 
            "Patins Eletrico" => 80.00,  
            "skate" => 30.00];

          


        echo print_r(exercicio39($array));
?>