<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "padrao";

    $conn = new mysqli( $host, $user, $senha, $banco);
    $table = "pessoa";
    $nome = "Danilinho da ZL";
    $idade = 27;
    $cidade = "Suzano";

    $sql = "INSERT INTO $table(nome,idade,cidade) VALUES ('$nome', $idade, '$cidade')";

    $conn->query($sql);