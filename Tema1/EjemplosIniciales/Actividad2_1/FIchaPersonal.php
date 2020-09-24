
<!--
    Ejercicio 1 - Ficha Personal.
-->

<?php
    $nombre = "Rafael Miguel";
    $Apellidos = "Cruz Álvarez";
    $edad = 26;
    $img = './img/foto_perfil_mod.jpg';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Personal</title>
</head>
<body>
    <header>
        <h1>Ficha Personal</h1>
    </header>
    <?php
        echo "Soy " .$nombre.' '.$Apellidos. " y tengo ".$edad." años."; 
        echo "<p><img src=\"".$img."\" width=\"200px\" height=\"200px\"></p>";
    ?>
</body>
</html>