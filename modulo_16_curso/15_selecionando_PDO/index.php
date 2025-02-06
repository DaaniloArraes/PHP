<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "padrao";
    $table = "pessoa";

    $conn = new PDO( "mysql:host=$host;dbname=$banco", $user, $senha);


    $id = 1008;

    $stmt = $conn->prepare("SELECT * FROM $table WHERE id > :id");
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    //print_r($stmt->fetch(PDO::FETCH_ASSOC));

    echo "<br>";

    print_r($stmt->fetchAll(PDO::FETCH_ASSOC));