<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 10</title>
</head>

<body>
    <h1>Elementos del Array en Orden Inverso:</h1>
    <ul>
        <?php
        // Declara el array
        $array = [1, 2, 'antonio', 200, 'pepe'];

        // Obtiene la longitud del array
        $longitud = count($array);

        // Recorre el array empezando por el último elemento
        for ($i = $longitud - 1; $i >= 0; $i--) {
            echo "<li>" . $array[$i] . "</li>";
        }
        ?>
    </ul>
</body>

</html>