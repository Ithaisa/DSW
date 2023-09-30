<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 11</title>
</head>

<body>
    <h1>Eliminar Valores Duplicados</h1>

    <form method="post">
        <label for="cadena">Ingrese una cadena de valores separados por comas:</label>
        <input type="text" name="cadena" id="cadena">
        <input type="submit" value="Eliminar Duplicados">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la cadena de valores separados por comas enviada por el usuario
        $cadena_original = $_POST["cadena"];

        // Convertir la cadena en un array y eliminar duplicados
        $valores = array_unique(explode(",", $cadena_original));

        // Mostrar la cadena original
        echo "<p>Cadena original: $cadena_original</p>";

        // Mostrar la lista sin duplicados como cadena
        echo "<p>Cadena sin duplicados: " . implode(",", $valores) . "</p>";
    }
    ?>
</body>

</html>