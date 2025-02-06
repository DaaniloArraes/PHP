<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "padrao";

    $conn = new mysqli( $host, $user, $senha, $banco);

    $sql = "SELECT * FROM `pessoa` as p WHERE p.id < 40";
    $result = $conn->query($sql);

    print_r( $result );

    $conn->close();
 
    ?>	
