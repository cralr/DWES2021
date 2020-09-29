    
<!--
    Ejercicio 3.-  Cargar fecha de nacimiento en una variable y calcular la edad.
-->

<?php

    $diaN=26;
    $mesN=10;
    $annoN=1993;

    $diaA=date("d");
    $mesA=date("n");
    $annoA=date("Y");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <header>
        <h1>Ejercicio 3</h1>
    </header>
    <section>
        <?php
            if (($mesN == $mesA) && ($diaN > $diaA)|| ($mesN > $mesA)) {
                $annoA=($annoA-1); 
            }
            $edad=($annoA-$annoN);

            echo "Mi fecha de nacimiento es: ".$diaN."-".$mesN."-".$annoN." y tengo ".$edad." años.";
        ?>
    </section>  
</body>
</html>