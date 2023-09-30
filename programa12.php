<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 11</title>
</head>

<body>
    <h1>Números Líderes</h1>

    <form method="post">
        <label for="numeros">Ingrese los números separados por comas:</label>
        <input type="text" name="numeros" id="numeros">
        <input type="submit" value="Encontrar Líder/es">
    </form>

    <?php
    if (isset($_POST["numeros"])) {
        $numeros = explode(",", $_POST["numeros"]);
        $lider = [];

        foreach ($numeros as $numero) {
            $numero = trim($numero);
            if (is_numeric($numero) && $numero > end($lider)) {
                $lider[] = $numero;
            }
        }

        echo "<p>Números líderes: " . implode(", ", $lider) . "</p>";
    }
    ?>
</body>

</html>