<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "padrao";

    $conn = new mysqli( $host, $user, $senha, $banco);

    $table = "pessoa";
    $nome = "Dermival do sul";
    $idade = 52;
    $cidade = "Sergipe";

    $stmt = $conn->prepare("INSERT INTO $table(nome,idade,cidade) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $nome, $idade, $cidade);
    $stmt->execute();
