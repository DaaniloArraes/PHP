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


    $stmt = $conn->prepare("DELETE FROM $table WHERE id = ? ");
    $stmt->bind_param("i",$id);
    $stmt->execute();

    if ($stmt->error){
        echo"Erro". $stmt->error;
    } 
