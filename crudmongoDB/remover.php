<?php 
    include_once"header.php";
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4" style="background-color:lavenderblush ;">
                <div class="card-body">
                    <a href="index.php" class="btn btn-info">
                    <i class="fa-solid fa-rotate-left"></i> Voltar
                    </a>
                    <h2>Deletar</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th>Cliente</th>
                            <th>Valor</th>
   
                        </thead>
                        <tbody>
                            <td></td>
                            <td></td>
                        </tbody>
                    </table>

                    <hr>

                    <div class="alert alert-danger" role="alert">
                      Atenção você está prestes a exclui-lo!
                    </div>

                    <form action="" method="post">
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-user-xmark"></i> Eliminar
                        </button>
                    </form>
    
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include_once"scripts.php";
?>
