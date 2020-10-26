
<!--
    Ejercicio 7 - Escribir un script que utilizando variables permita obtener el siguiente resultado:
    Valor es string.
    Valor es double.
    Valor es boolean.
    Valor ess integer.
    Valos is NULL.
-->

<?php
    $string = "Hola";
    $doble = 1.1;
    $verdad = true;
    $num = 1;
    $nulo = null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <header>
        <h1>Ejercicio 7</h1>
    </header>
    <section>
        <?php
            echo "<p>Valor es: ".gettype($string)."</p>";
            echo "<p>Valor es: ".gettype($doble)."</p>";
            echo "<p>Valor es: ".gettype($verdad)."</p>";
            echo "<p>Valor es: ".gettype($num)."</p>";
            echo "<p>Valor es: ".gettype($nulo)."</p>";
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
        ?>
    </section>  
</body>
</html>