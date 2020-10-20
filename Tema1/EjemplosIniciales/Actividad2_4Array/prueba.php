




<!--

    Ejercicio 3 Array: Nota de los alumnos de 2º DAW para el módulo DWES.

-->

<?php

    //Array de meses

    $comunidades = array(
                        array("Andalucia" => array ("Cordoba", "Sevilla", "Granada", "Jaen", "Almeria", "Malaga", "Huelva", "Cadiz")),
                        array("CyL" => array ("Valladolid", "Leon", "Burgos", "palencia", "Soria", "Segovia", "Avila", "Zamora", "Salamanca")),
        

 );


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 3</title>
</head>
<body>
    <header>
        <h1>Ejercicio 3: Notas Alumnos</h1>
    </header>
    <section>
        <?php
            foreach ($comunidades as $clave => $comunidad) {
                foreach($comunidad as $indiceComunidad => $provincia)
                    echo $indiceComunidad."</br>";
                    foreach($provincia as $valor)
                     echo $valor."</br>";
                
            
            }                
        ?>
    </section>  
</body>
</html>