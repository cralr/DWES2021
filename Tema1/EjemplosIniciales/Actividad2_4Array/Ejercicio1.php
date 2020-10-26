
<!--

    Ejercicio 1 Array: Meses del año.

-->

<?php

    //Array de meses

    $arrayMeses = array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <header>
        <h1>Ejercicio 1: Meses</h1>
    </header>
    <section>
        <?php
            echo "Los meses son: </br>";
            foreach ($arrayMeses as $meses => $mes) {
                $meses += 1;
                echo "Mes ".$meses." es ".$mes."</br>";
            }
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";       
        ?>
    </section>  
</body>
</html>