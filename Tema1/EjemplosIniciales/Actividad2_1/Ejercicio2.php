
<!--
    Ejercicio 2 - Área Ciruclo.
-->

<?php
    $radio = 5;
    $area = pi() * pow($radio,2);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaginaInicio/css/style.css">
    <link rel="stylesheet" href="/PaginaInicio/css/normalize.css">
    <title>Área de un Círculo</title>
</head>
<body>
    <header>
        <h1>Área de un Círculo</h1>
    </header>
    <section>
        <?php
            echo "El radio del círculo es ".$radio." y el valor de su área es: ".$area;  
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_1/Ejercicio2.php\"><button>Ver Código</button></a></br>";
        ?>
    </section>
</body>
</html>