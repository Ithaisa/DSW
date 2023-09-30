
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Programa 6</title>
    </head>
    <body>
        <h1>Dado al azar</h1>
        <?php

        $valorAzar =rand(1,6);

        switch($valorAzar){
            case 1:
                echo "<p>El valor del dado es 1</p>";
                echo "<img src = './img/1.jpg' alt ='Cara 1 del dado'>";
                break;
            case 2:
                echo "<p>El valor del dado es 2</p>";
                echo "<img src = './img/2.jpg' alt ='Cara 2 del dado'>";
                break;
            case 3:
                echo "<p>El valor del dado es 3</p>";
                echo "<img src = './img/3.jpg' alt ='Cara 3 del dado'>";
                break;
            case 4:
                echo "<p>El valor del dado es 4</p>";
                echo "<img src = './img/4.jpg' alt ='Cara 4 del dado'>";
                break;
            case 5:
                echo "<p>El valor del dado es 5</p>";
                echo "<img src = './img/5.jpg' alt ='Cara 5 del dado'>";
                break;
            case 6:
                echo "<p>El valor del dado es 6</p>";
                echo "<img src = './img/6.jpg' alt='Cara 6 del dado'>";
                break;
            default:
                echo "Valor fuera de rango";
        }
        ?>
    </body>
    </html>
