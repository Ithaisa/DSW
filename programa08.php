<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros pares entre 1 y 100</title>
</head>
<body>
    <h1>Números pares entre 1 y 100</h1>
</body>
</html>

<?php

// Creamos un array para almacenar los números pares
$numerosPares = array();

//Recorremos con un for desde 1 hasta 100
    for($i = 0; $i <=100; $i++){
        //Verificamos si el numero actual es par
        if($i %2 == 0){
            echo $numerosPares[]=$i; //Si el numero es par, se añade al array
        }
    }

    echo "<pre>";
        print_r($numerosPares); 
        echo "<br>";
    echo "</pre>";
?>