<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "padrao";

    $conn = new mysqli( $host, $user, $senha, $banco);

    $sql = "SELECT * FROM pessoa WHERE id >= 1000 and id <= 1002";

    $result = $conn->query($sql);
    $conn ->close();

    $apenas1item  = $result->fetch_assoc();

    $todosItens = $result->fetch_all();

    print_r($apenas1item);
    echo "<br>";
    print_r($todosItens);