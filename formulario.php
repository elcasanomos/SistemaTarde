
<?php
$mostrar_resultado = false;
$mensaje_resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);
    $nota_practico = floatval($_POST['nota_practico']);
    
    
    if ($nota1 < 0 || $nota1 > 40 || $nota2 < 0 || $nota2 > 40 || $nota_practico < 0 || $nota_practico > 20) {
        $mensaje_resultado = "<p style='color: red;'>Las notas deben estar dentro de los rangos permitidos.</p>";
    } else {
        $total_puntos = $nota1 + $nota2 + $nota_practico; 
        $nota_final = intval($total_puntos);; 
    
        $mensaje_resultado = "
            <h2>Resultado</h2>
            <p><strong>Estudiante:</strong> $nombre</p>
            <p><strong>Nota 1 :</strong> $nota1</p>
            <p><strong>Nota 2 :</strong> $nota2</p>
            <p><strong>Nota Práctico :</strong> $nota_practico</p>
            <p><strong>Nota Final :</strong> $nota_final</p>
        ";
        $mostrar_resultado = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Notas del Estudiante</title>
</head>
<body>
    <h1>Ingreso de Datos del Estudiante</h1>
    <form method="POST" action="">
        <label>Nombre del Estudiante:</label><br>
        <input type="text" name="nombre" required><br>

        <label>Nota 1 </label><br>
        <input type="number" name="nota1" max="40" required><br>

        <label>Nota 2 </label><br>
        <input type="number" name="nota2" max="40" required><br>

        <label>Nota Práctico </label><br>
        <input type="number" name="nota_practico" max="20" required><br>

        <input type="submit" value="Calcular Nota Final"><br>
    </form>

    <?php
    if ($mostrar_resultado) {
        echo "<hr>" . $mensaje_resultado;
    }
    ?>
</body>
</html>