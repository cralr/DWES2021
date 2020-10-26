
<!--
    Ejercicio 6  - A veces es necesario conocer exactamente el contenido de una variable. Piensa como puedes hacer esto
    y escribe un script con la siguiente salida:
    string(5) “Harry”
    Harry
    int(28)
    NULL
-->

<?php
    $nombre = "Harry";
    $num = 28;
    $x = NULL;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <header>
        <h1>Ejercicio 6</h1>
    </header>
    <section>
        <?php
            var_dump($nombre);
            echo "<p>".$nombre."</p>";
            var_dump($num);
            echo "<p></p>";
            var_dump($x);
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
        ?>
    </section>  
</body>
</html>