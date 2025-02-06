<?php 
    include_once"header.php";
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>Crud com mongoDB e php</h2>
                    <a href="adicionar.php" class="btn btn-primary">
                        <i class="fa-solid fa-user-plus"></i> Adicionar novo registro
                    </a>
                    <hr>
                    <table class="table table-sm  table-hovert table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Cliente</th>
                            <th>Valor</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <form action="atualizar.php" method="post">
                                        <button class="btn btn-warning">
                                            <i class="fa-solid fa-user-pen"></i> Editar
                                        </buttonclass>
                                    </form>
                                </td>
                                <td class="text-center">    
                                    <form action="remover.php" method="post">
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-user-xmark"></i> Deletar
                                        </buttonclass>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include_once"scripts.php";
?>
