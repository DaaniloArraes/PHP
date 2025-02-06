<?php
    include_once("templates/header.php");
?>

<div class="container">

    <?php if(isset($printMsg) && $printMsg != '') : ?>
        <p id="msg"><?= $printMsg?></p>
    <?php endif; ?>
    <h1 id="main-title">Vendas</h1>
    
    <nav class="navbar navbar-expand-lg navbar-link bl-primary">
        <div>
            <div class="navbar-nav">
                <a class="nav-link active" href="<?= $BASE_URL ?>create.php">Adicionar Venda</a>
            </div>
        </div>
    </nav>
    <?php if(count($contacts)> 0): ?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">id Pedido</th>
                    <th scope="col">Valor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact):?>
                    <tr>
                        <td class="col-id"><?= $contact['id']?></td>
                        <td><?= $contact['name']?></td>
                        <td><?= $contact['phone']?></td>
                        <td class="actions">
                            <a href="<?= $BASE_URL ?>show.php?id=<?= $contact['id']?>"><i class="fas fa-eye check-icon"></i></a> 
                            <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact['id']?>"><i class="fas fa-edit edit-icon"></i></a> 
                            <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                                <button type="submit" class="delete-btn"><i class="fas fa-trash delete-icon"></i></button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach;?>
            </tbody>
        </table>


    <?php else: ?>
        <p id="empty-list-text">Ainda não há contatos para sua Agenda, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>

    <?php endif; ?>
</div>

<?php
    include_once("templates/header.php");
?>