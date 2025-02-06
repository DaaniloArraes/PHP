<?php
    class Conexion{
        public function conectar(){
            $servidor = "127.0.0.1";
            $user = "mongoadmin";
            $pass = "123456";
            $baseDados = "crud" ;
            $porta = "27017";

            $cadeiaConexao = "mongodb://" . $user . ":".$pass."@".$servidor.":".$porta ."/" .$baseDados ;
            $cliente = new MongoDB\Client($cadeiaConexao);
            return $cliente->selectDataBase($baseDados); 

        }
    }

?>