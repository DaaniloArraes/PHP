<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "padrao";

    $conn = new mysqli( $host, $user, $senha, $banco);

    $table = "pessoa";
    $id = 1001;

    $stmt = $conn->prepare("SELECT * FROM $table WHERE id > ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();

    print_r( $result->fetch_all() );