<?php include_once("templates/header.php"); ?>

<div class="container">
    <?php   include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Gerar Pedido</h1>
    <form action="<?= $BASE_URL ?>config/process.php" method="POST" id="create-form">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name">Cliente:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o Nome" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone do Contato:</label> 
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o Telefone" required>
        </div>
        <div class="form-group">
            <label for="observation">Itens do Pedido:</label>
            <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Digite a Observação" rows="3"></textarea>
        </div>
    <button type="submit" id="btn-cadastrar" class="btn btn-primary">Cadastrar</button>
    </form>
</divclas>

<?php include_once("templates/footer.php"); ?>