<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 2</title>
</head>

<body>
    <h1>Declaraciones de variables de cada tipo de dato.</h1>

    <?php
    // Declarar variables de diferente tipo
    
    $numero = 0;
    echo "<br>";
    $flotante = 10.65;
    echo "<br>";
    $cadenaConComillaSimple = 'Hola';
    echo "<br>";
    $cadenaConComillaDoble = "Mundo";
    echo "<br>";
    $concatenacion = $cadenaConComillaSimple . " " . $cadenaConComillaDoble;
    echo "<br>";
    $saldo = true;
    echo "<br>";
    //Mostrar los resultados en echo y print
    echo $numero;
    echo "<br>";
    print $flotante;
    echo "<br>";

    //Declarar  una constante con define y const
    
    define("edad", 33);
    echo "<br>";
    const nombre = "Athaisa";
    echo "<br>";

    //Realizar una conversion explicita de tipos.
    
    $cadena = "123";
    echo "<br>"; //convierte una variable a un entero
    $num = intval($cadena);
    echo "<br>";

    $cadena2 = "456";
    echo "<br>"; //convierte una variable a numero flotante
    $numFlotante = floatval($cadena2);
    echo "<br>";

    $num2 = 42;
    echo "<br>"; //convierte una variable a una cadena
    $cadena3 = strval($num2);
    echo "<br>";
    //Se utiliza para saber de que tipo es la variable
    var_dump($num);
    echo "<br>";
    var_dump($num2);
    echo "<br>";
    var_dump($cadena);
    echo "<br>";
    var_dump($cadena2);
    echo "<br>";
    var_dump($cadena3);
    echo "<br>";


    ?>

</body>

</html>