<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 09</title>
</head>

<body>
    <!-- Crea un array de 5 números aleatorios entre 20 y 30, y muestralo. -->

    <h1>Creación de array aleatorio</h1>

    <?php
    //Creamos el array vacio
    $arrAleatorio = array();

    //Recorremos el array con un for 
    for ($i = 0; $i <= 5; $i++) {
        $numeroAleatorio = rand(20, 30); // Genera un número aleatorio entre 20 y 30
        $arrAleatorio[] = $numeroAleatorio; // Agrega el número al array
    }

    // Muestra el array aleatorio
    echo "Array de 5 números aleatorios entre 20 y 30: ";
    print_r($arrAleatorio);
    ?>
</body>

</html>