<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saltamontes</title>
</head>

<body>
    <h1>Saltamontes</h1>
    <form method="post">
        <label for="saltos">Ingrese los saltos separados por coma:</label>
        <input type="text" id="saltos" name="saltos">
        <input type="submit" value="Saltar">
    </form>
    <?php
    if (isset($_POST['saltos'])) {
        $saltos = $_POST['saltos'];
        $saltos_array = explode(",", $saltos);
        $posicion = 0;

        while ($saltos_array[$posicion] != 0) {
            echo $saltos_array[$posicion] . ",";
            for ($i = 0; $i < $saltos_array[$posicion]; $i++) {
                echo "_";
            }
            $posicion += $saltos_array[$posicion] + 1;
            if ($posicion >= count($saltos_array)) {
                break;
            }
        }
    }
    ?>
</body>

</html>