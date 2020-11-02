
<!--
    Ejercicio 4 - Script que cargue las siguientes variables:
    $x=10;
    $y=7;
    y muestre
    10 + 7 = 17
    10 - 7 = 3
    10 * 7 = 70
    10 / 7 = 1.4285714285714
    10 % 7 = 3
-->

<?php
    $x = 10;
    $y = 7;
    $suma = $x+$y;
    $resta = $x-$y;
    $mult = $x*$y;
    $division =$x/$y;
    $modulo =$x%$y;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <header>
        <h1>Ejercicio 4</h1>
    </header>
    <section>
        <?php
            echo "<p>La suma entre ".$x." y ".$y." es: ".$suma."</p>";  
            echo "<p>La resta entre ".$x." y ".$y." es: ".$resta."</p>"; 
            echo "<p>La multiplicación entre ".$x." y ".$y." es: ".$mult."</p>"; 
            echo "<p>La división entre ".$x." y ".$y." es: ".$division."</p>"; 
            echo "<p>El módulo entre ".$x." y ".$y." es: ".$modulo."</p>"; 
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_1/Ejercicio4.php\"><button>Ver Código</button></a></br>";
        ?>
    </section>  
</body>
</html>