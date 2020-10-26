
<!--
    Ejercicio 3 - Suma de dos números en variables.
-->

<?php
    $num1 = 5;
    $num2 = 3;
    $suma = $num1+$num2;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos números</title>
</head>
<body>
    <header>
        <h1>Suma de dos números</h1>
    </header>
    <section>
        <?php
            echo "La suma entre ".$num1." y ".$num2." es: ".$suma;  
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
        ?>
    </section>
</body>
</html>