<!--

    Ejercicio 4 - Mostrar Paleta de Colores.

-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 4</title>
</head>
<body>
    <header>
        <h1>Ejercicio 4</h1>
    </header>
    <section>
        <?php
        
            echo "<p><b>Paleta de Colores.</b></p>";

            $color = "";
            echo "<table id='ejercicio4'>";
            for ($i = 0; $i < 256; $i += 40) { //Poner Constantes
                for ($j = 0; $j < 256; $j += 40) {

                    echo "<tr>";

                    for ($k = 0; $k < 256; $k += 25) {
                        $color = "rgb($i,$j,$k)";
                        $hexadecimal = "#".dechex($i).dechex($j).dechex($k);
                        echo "<td style=\"background-color:$color\">$hexadecimal</td>";
                    }
                    echo "</tr>";
                }
            }
            echo "</table>"; 
        ?>
    </section>  
</body>
</html>