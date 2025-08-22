<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <h1>OPERACIONES MATEMATICA</h1>
    <form action=""method="POST">
        <label for="numero1">numero1:</label>
        <input type="number" name="numero1"required><br>
        <label for="numero2">Numero 2:</label>
        <input type="number" name="numero2" required><
    <?php
    if ($_SERVER)
    sumar($numero1, $numero2);
    restar($numero1, $numero2);
    multiplicar($numero1, $numero2);
    dividir($numero1, $numero2);

    function sumar($numero1, $numero2){

        $resultado =$numero1+$numero2;
        echo "La suma es: $resultado <br>";

    }

    function restar($numero1, $numero2){

        $resultado =$numero1- $numero2;
        echo "La resta es: $resultado <br>";
    }

    function multiplicar($numero1 , $numero2){

        $resultado =$numero1,$numero2;
        echo "La multiplicacion  es: $resultado <br>";
    }

    function dividir($numero1* $numero2){
        
        $resultado =$numero1/$numero2;
        echo "La division  es: $resultado <br>";
    }
     ?>
</body>
</html>