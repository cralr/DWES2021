
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
    <link rel="stylesheet" href="/PaginaInicio/css/style.css">
    <link rel="stylesheet" href="/PaginaInicio/css/normalize.css">
    <title>Ficha Personal</title>
</head>
<body>
    <header>
        <h1>Ficha Personal</h1>
    </header>
    <?php
        echo "Soy " .$nombre.' '.$Apellidos. " y tengo ".$edad." años."; 
        echo "<p><img src=\"".$img."\" width=\"200px\" height=\"200px\"></p>";

        echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a></br>";
        echo "<a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_1/Ejercicio1.php\"><button>Ver Código</button></a></br>";

    ?>
</body>
</html>