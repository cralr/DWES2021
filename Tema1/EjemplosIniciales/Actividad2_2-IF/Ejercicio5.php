    
<!--
    Ejercicio 5.- Lista de enlaces en función del perfil de usuario
-->

<?php

    $perfil = "usuario";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <header>
        <h1>Ejercicio 5</h1>
    </header>
    <section>
        <?php
            echo "Estas logueado como $perfil</br>";
            if ($perfil === "administrador") {
                ?>
                    <a href="#">Inicio</a>
                    <a href="#">Administrar usuarios</a>
                    <a href="#">Perfil</a>
                    <a href="#">Salir</a>
                <?php
            } else if ($perfil === "usuario") {
                ?>
                    <a href="#">Inicio</a>
                    <a href="#">Perfil</a>
                    <a href="#">Salir</a>
                <?php
            } else {
                ?>
                <h2>El perfil no es correcto</h2>
                <?php
            }
        ?>
    </section>  
</body>
</html>