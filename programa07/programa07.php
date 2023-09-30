<?php
// Genera un tamaño de fuente aleatorio entre 200% y 700%
$tamanoFuente = rand(200, 700);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Programa 7</title>
    <style>
        /* Se aplica el tamaño de fuente generado al elemento con la clase "nombre" */
        .nombre {
            font-size: <?php echo $tamanoFuente; ?>%;
        }
    </style>
</head>
<body>
    <h1>Tamaño de Texto Aleatorio</h1>

    <!-- Muestra tu nombre con el tamaño de fuente aleatorio -->
    <p class="nombre">Athaisa</p>
</body>
</html>
