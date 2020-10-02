<!--

    Ejercicio 3 - Tablar de multiplicar 1 al 10

-->



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 3</title>
</head>
<body>
    <header>
        <h1>Ejercicio 3</h1>
    </header>
    <section>
        <?php
            echo "<p><b>Tabla de multiplicar del 1 al 10.</b></p>";

            echo "<table>";
            for ($x = 1; $x <=10; $x++){
                echo "<tr>";
                echo "<th>";
                echo "Tabla del ".$x;
                echo "</th>";
                for ($y = 1;$y <= 10;$y++){                      
                    $operacion=$x*$y;                    
                    echo "<td>";                      
                    echo $y." x ".$x. " = <b>" .$operacion."</b>";                      
                    echo "</td>";              
                }              
                echo "</tr>";          
            } 
            echo '</table>';
        ?>
    </section>  
</body>
</html>