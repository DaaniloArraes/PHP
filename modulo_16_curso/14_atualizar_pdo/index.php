<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "padrao";
    $table = "pessoa";

    $conn = new PDO( "mysql:host=$host;dbname=$banco", $user, $senha);

    $nome = "Candida Pereira Da Silva";
    $idade = 75;
    $cidade = "Varzea Alegre";
    $id = 1010;

    $stmt = $conn->prepare("UPDATE $table SET nome = :nome, idade = :idade, cidade = :cidade WHERE id = :id");

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":idade", $idade);
    $stmt->bindParam(":cidade", $cidade);
    $stmt->bindParam(":id", $id);

    $stmt->execute();