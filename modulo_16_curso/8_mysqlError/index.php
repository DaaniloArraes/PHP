<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "padra1o";

    $conn = new mysqli( $host, $user, $senha, $banco);

    if( $conn->connect_errno ){
        echo "<br> Erro na conexão! <br>";

        echo "Erro: ". $conn->connect_error;
    }
?>