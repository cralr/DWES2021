
<!-- Ejercicio 4 Formularios.
   Crear un script para sumar una serie de números. El número de números a sumar será introducido 
   en un formulario.
-->


<?php

    $suma=0;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Ejercicio 3</title>
</head>
<body>
    <section>
        <?php
            if(isset($_POST["enviar"])){
                echo "<form action=\"Ejercicio4.php\" method=\"post\">";
                echo "Número introducidos a sumar ".$_POST["total_numeros"]."</br>";
                for($i=0; $i<$_POST["total_numeros"]; $i++){
                    echo "Número ".($i+1).": <input type=\"number\" name=\"numeros[]\" /></label></br>";
                }
                echo "</br><input type=\"submit\" name=\"sumar\" value=\"Sumar\">";

            }
            else{
            echo "<h1>Ejercicio 4: Sumatorio </h1>";
            echo "<form action=\"Ejercicio4.php\" method=\"post\">";
                echo "<p>Introduce el número de números a sumar :<input type=\"number\" name=\"total_numeros\" min=\"1\"></p>";
                echo "<input type=\"submit\" name=\"enviar\" value=\"Enviar\">";
            echo "</form>";
            echo "</br>";
            }

            if(isset($_POST["sumar"])){
                foreach($_POST["numeros"] as $numeros){
                    $suma+=$numeros;
                }
                echo "La suma de los números introducidos es: ".$suma;
            }
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
        ?>
    </section>  
</body>
</html>