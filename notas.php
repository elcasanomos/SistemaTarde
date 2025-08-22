<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Notas Finales</title>
</head>
<body>
    <h1>NOTAS FINALES</h1>
    <form method="POST" action="">
        <label for="nombre_empleado">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" required>
        <br><br> 
        <label for="nota1">NOTA1: </label>
        <input type="number" id="nota1" name="nota1" required>
        <br><br>
        <label for="nota2">NOTA2: </label>
        <input type="number" id="nota2" name="nota2" required>
        <br><br>
        <label for="nota3">NOTA3: </label>
        <input type="number" id="nota3" name="nota3" required>
        <br><br>        
        <input type="submit" value="Calcular">
    </form>

    <?php
    function CalcularPromedio($nota1, $nota2, $nota3,$Nombre) {
        $resultado = ($nota1 + $nota2 + $nota3) / 3;
        echo "<h2>Resultados</h2>";
        if ($resultado > 61) { 
            echo "Nombre Estudiante:" . $Nombre . "<br>";
            echo "Aprobado: " . $resultado . "<br>"; 
        } else {
            echo "Nombre Estudiante:" . $Nombre . "<br>";
            echo "Reprobado: " . $resultado . "<br>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $Nombre = $_POST['Nombre'];
        if ($nota1 < 0 || $nota1 > 100){
            echo "Error las notas deben ser del 0 a 100";
        }
        if($nota2 > 0 || $nota2 > 100){
            echo "Error las notas deben ser del 0 a 100";
        }
        if($nota3 < 0 || $nota3 > 100){
            echo "Error las notas deben ser del 0 a 100";
        }
        else{
            CalcularPromedio($nota1, $nota2, $nota3,$Nombre);
        }
        
    }
    ?>

</body>
</html>