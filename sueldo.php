<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilla de Sueldo</title>
</head>
<body>
    <h1>Planilla de Sueldo</h1>
    <form method="POST" action=""> 
        <label for="nombre_empleado">Nombre:</label>
        <input type="text" id="nombre_empleado" name="nombre_empleado" required>
        <br><br>
        <label for="sueldo_basico">Sueldo Básico:</label>
        <input type="number" id="sueldo_basico" name="sueldo_basico" step="0.01" required> 
        <br><br>
        <label for="bono">Bono:</label>
        <input type="number" id="bono" name="bono" step="0.01" required>
        <br><br>
        <input type="submit" value="Calcular Sueldo"> 
        <br><br>
    </form>

    <?php
    function CalcularSueldo($nombre, $sueldoBasico, $bono) {
        $descuento = $sueldoBasico * 0.13;
        $sueldoFinal = $sueldoBasico + $bono - $descuento;

        echo "<h2>Resumen del Sueldo</h2>";
        echo "Nombre del Empleado:" . $nombre . "<br>";
        echo "Sueldo Básico:" . $sueldoBasico . "<br>";
        echo "Bono:" . $bono . " <br>";
        echo "Descuento (13%):" . $descuento . "<br>";
        echo "Sueldo Final:" . $sueldoFinal . "<br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre_empleado'];
        $sueldoBasico = floatval($_POST['sueldo_basico']); 
        $bono = floatval($_POST['bono']);

        if ($sueldoBasico < 0 || $sueldoBasico > 10000 || $bono < 0 || $bono > 1000) {
            echo "Error: El Sueldo Básico debe estar entre 0 y 10000, y el Bono entre 0 y 1000";
        } else {
            CalcularSueldo($nombre, $sueldoBasico, $bono);
        }        
    }
    ?>
</body>
</html>