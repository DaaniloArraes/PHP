<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "padrao";
    $table = "pessoa";
    $nome = "Maria das Dores Arraes da Silva";
    $idade = 43;
    $cidade = "Suzano";
    $conn = new PDO( "mysql:host=$host;dbname=$banco", $user, $senha);

    $stmt = $conn->prepare("INSERT INTO $table(nome, idade, cidade) VALUES (:nome,:idade,:cidade) ");


    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":idade", $idade);
    $stmt->bindParam(":cidade", $cidade);
    $stmt->execute();