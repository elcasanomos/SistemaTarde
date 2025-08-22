<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //llamar a una funcion
    $nombre("yasmine");
    saludar("$nombre");
    //crear la funcion

    function saludar($nombre) {
         echo"hola $nombre,bienvenido a mi pagina <br>";
    }
    ?>
</body>
</html>