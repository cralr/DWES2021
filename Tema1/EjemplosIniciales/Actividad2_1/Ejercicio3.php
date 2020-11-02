
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
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_1/Ejercicio3.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>
</body>
</html>