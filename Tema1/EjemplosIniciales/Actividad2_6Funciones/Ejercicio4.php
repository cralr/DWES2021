
<!-- Ejercicio 4 Funciones.
    4.  Función recursiva que permita sumar los dígitos de un número pasado por la URL.
-->
<?php

     function sumaDigitos($num){
        if($num == 0){
            return 0;
        }else{
            return sumaDigitos($num/10) + ($num%10);
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
    <title>Ejercicio 4</title>
</head>
<body>
    <section>
        <?php
            if(isset( $_GET["digitos"])){
                echo "<h1>Suma Dígitos de un números</h1>";
                echo "<p>La suma de los dígitos es: ".sumaDigitos($_GET["digitos"])."</p>";
            }
            else{
                echo "<h1>Suma Dígitos de un números</h1>";
                echo "<form action=\"Ejercicio4.php\" method=\"get\">";
                    echo "<p>Introduzca un número para sumar sus dígitos.</p>";
                    echo "<label><p>Número: </p><input type=\"number\" name=\"digitos\" value=\"\" required></input></label></br>";
                    echo "</br></br><input type=\"submit\" value=\"Enviar\" name=\"\"></button>";
                echo "</form>";
                
            }

            echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
        ?>
    </section>  
</body>
</html>