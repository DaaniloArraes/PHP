<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "padrao";

    $conn = new mysqli( $host, $user, $senha, $banco);

    $table = "pessoa";
    $id = 1001;
    $novonome = "Elis";
    $novaIdade = 48;
    $novaCidade = "Camaçari";


    $stmt = $conn->prepare("UPDATE $table SET nome = ?, idade = ?, cidade = ? WHERE id = ? ");

    $stmt->bind_param("sisi", $novonome, $novaIdade, $novaCidade, $id);
    $stmt->execute();

    if ($stmt->error){
        echo"Erro". $stmt->error;
    } 