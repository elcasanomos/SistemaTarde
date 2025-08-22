<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Saludo</h1>
    <?php
    $Nombre = " juan pedro ";
    Saludar($Nombre);
    $NombreF = " Maria ";
    Saludar($NombreF);
    function Saludar($Nom){
        echo "Hola, $Nom Bienvenido a mi mundo de minecraft. <br>";
    } 
    ?>
</body>
</html>