
<!--
    Ejercicio 1 - Cargar dos números en variables  y escribir el mayor de ellos.
-->

<?php

    $num1 = 1;
    $num2 = 2;
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <header>
        <h1>Ejercicio 1</h1>
    </header>
    <section>
        <?php
            echo "<p>Los números son: </p> <p>Número 1 = ".$num1."</p><p>Número 2 = ".$num2."</p>"; 
            if ($num1 > $num2 ) 
                echo $num1." es mayor que ".$num2;
            else if ($num2 > $num1 ) 
                echo $num2." es mayor que ".$num1;
            else 
                echo $num1." y ".$num2." son iguales";
        ?>
    </section>  
</body>
</html>