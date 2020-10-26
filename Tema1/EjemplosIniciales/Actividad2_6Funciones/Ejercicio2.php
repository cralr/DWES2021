
<!-- Ejercicio 2 Funciones.
    2. Escribe un script que permita factorizar un número pasado por la URL.  Muestra el resultado en dos columnas.
-->

<?php

    

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Ejercicio 1</title>
</head>
<body>
    <section>
        <?php
                if(isset( $_GET["numero"])){
                    
                }
                else{
                    echo "<h1>Letra DNI</h1>";
                    echo "<form action=\"Ejercicio2.php\" method=\"get\">";
                        echo "<p>Introduzca el número a factorizar.</p>";
                        echo "<label><p>Número: </p><input type=\"number\" name=\"numero\" value=\"\"></input></label></br>";
                        echo "</br></br><input type=\"submit\" value=\"Enviar\" name=\"\"></button>";
                    echo "</form>";
                }
                echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
        ?>
    </section>  
</body>
</html>