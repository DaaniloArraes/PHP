<?php 
    include_once"header.php";
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-info">
                    <i class="fa-solid fa-rotate-left"></i> Voltar
                    </a>
                    <h2>Atualizar</h2>
                    <form action="" method="post">
                        <label for="cliente">CLiente</label>
                        <input type="text" class="form-control" id="cliente" name="cliente">
                        <label for="valor">Valor</label>
                        <input type="text" class="form-control" id="valor" name="valor">
                        <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-user-disk"></i> Ataulizar
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
