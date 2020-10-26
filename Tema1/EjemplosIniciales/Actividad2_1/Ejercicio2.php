
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
        ?>
    </section>
</body>
</html>