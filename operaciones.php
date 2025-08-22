<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operaciones</h1>
    <form method="POST" action ="">
        <label for="num1">Numero1: </label>
        <input type="Number" id= "num2" name ="num1" required>
        <br><br>
        <label for="num2">Numero2: </label>
        <input type="Number" id = "num2" name="num2" required>
        <br><br>
        <input type="submit" value="calcular">
    </form>
    <!--sentencias php-->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero1 = $_POST['num1'];
        $numero2 = $_POST['num2'];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if (is_numeric($num1) && is_numeric($num2)) {
            $suma=$num1+$num2;
            $resta=$num1-$num2;
            $multiplicacion=$num1*$num2;
            if ($num2 !=0){
                $division=$num1/$num2;
            }
            else
            {
                $division = "Error: Division por cero";
            }
        
           echo "<h2>Resultados:</h2>";
           echo "Suma: ". $suma . "<br>";
           echo "Resta: ". $resta. "<br>";
           echo "Multiplicacion: ". $multiplicacion. "<br>";
           echo "Division: ". $division. "<br>";
        } 
        else{
            echo "Por Favor, ingrese números válidos.";
        }
    }  
    ?>
</body>
</html>