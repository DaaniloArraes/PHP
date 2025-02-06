<?php
    include_once("config/url.php");    
    include_once("config/process.php");    
    //limpa a mensagem

    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg']='';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark ye-primary">
      <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
        <img src="<?= $BASE_URL ?>img/logo.svg" alt="Agenda">
      </a>
      <div>
        <div class="navbar-nav">
        <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Pedidos</a>
          <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>clientes.php">Clientes</a>
          <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>entregas.php">Entregas</a>
          <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>estoque.php">Estoque</a>
          <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>funcionarios.php">Funcionarios</a>
          <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>produtos.php">Produtos</a>
          <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>vendas.php">Vendas</a>
        </div>
      </div>
    </nav>
</header>