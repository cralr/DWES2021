
<!-- Ejercicio 2 Funciones.
    2. Escribe un script que permita factorizar un número pasado por la URL.  Muestra el resultado en dos columnas.
-->

<?php

    /**
     * Función para factorizar un número
     * @param numero Introducido por un formulario
     */

    function factorizarNumeros($numero){
        for($i=2;$i<=$numero;$i++){
            while($numero % $i==0){
                echo ($numero." | ".$i."<br>");
                $numero/=$i;
            }
        }
    }
    

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Ejercicio 2</title>
</head>
<body>
    <section>
        <?php
                if(isset( $_GET["numero"])){
                    echo "La factorización del número ".$_GET["numero"]." es:</br></br>";
                    factorizarNumeros($_GET["numero"]);
                }
                else{
                    echo "<h1>Factorizar un número</h1>";
                    echo "<form action=\"Ejercicio2.php\" method=\"get\">";
                        echo "<p>Introduzca el número a factorizar.</p>";
                        echo "<label><p>Número: </p><input type=\"number\" name=\"numero\" value=\"\" required></input></label></br>";
                        echo "</br></br><input type=\"submit\" value=\"Enviar\" name=\"\"></button>";
                    echo "</form>";
                }
                echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
        ?>
    </section>  
</body>
</html>