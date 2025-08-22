<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ESTILO.CSS">
    <title>Document</title>
</head>
<body>
    <form>
        <h1>FORMULARIO PERSONA</h1>
            <form action="" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required>

                <label for="telefono">telefono</label>
                <input type="text" name="telefono" required>

                <label for="Edad">edad</label>
                <input type="number" name="edad" required>

                <input type="submit" value="Enviar datos">

</form>
</body>
</html>
<?php
include 'PERSONA.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Nombre=($_POST['Nombre']);
    $telefono=($_POST['Telefono']);
    $edad=($_POST['Edad']);
}
try{
    $persona1 = new persona($Nombre,$telefono,$edad);
echo "<br>";
echo "</div class='persona'>";
$persona1->MostrarDatos();
echo "</div>";
}
catch(Exception $error){
    echo $error->getMessage();
}


?>
    

<?php