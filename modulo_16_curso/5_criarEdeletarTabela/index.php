<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "padrao";

    $conn = new mysqli( $host, $user, $senha, $banco);


   // $sql = "CREATE TABLE teste ( nome VARCHAR(50), sobrenome VARCHAR (50))";

    $sql = "DROP TABLE teste;";

    $conn->query($sql);
    
    $conn->close();
    ?>
