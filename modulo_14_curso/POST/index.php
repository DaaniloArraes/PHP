<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="cadastro.php" method="POST">
    <div>
        <output>Marca do Carro</output>
        <input type="text" name="marca" >
    </div>
    <div>
        <output>Preço do Carro</output>
        <input type="text" name="preco" >
    </div>    
    <div>
        <input type="checkbox"  name="opcionais[]" value="Teto solar"> Teto Solar
    </div>
    <div>
        <input type="checkbox"  name="opcionais[]" value="Pelicula"> Pelicula
    </div>
    <div>
        <input type="checkbox"  name="opcionais[]" value="Blindado"> Blindado
    </div>
    <div>
        <input type="submit" value="enviar">
    </div>
</form>
    
</body>
</html>