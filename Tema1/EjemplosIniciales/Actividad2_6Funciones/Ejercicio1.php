
<!-- Ejercicio 1 Funciones.
    Escribe un script en php para calcular la letra del NIF a partir del número del DNI enviado en la URL: http://dominio.local/calculaletra?dni=30182410.

    La letra se obtiene calculando el resto de la división del número del DNI por 23. A cada resultado le corresponde una letra.

    0=T; 1=R; 2=W; 3=A; 4=G; 5=M; 6=Y; 7=F; 8=P; 9=D; 10=X; 11=B; 12=N; 13=J; 14=Z; 15=S; 16=Q; 17=V; 18=H; 19=L; 20=C; 21=K; 22=E.

    Utiliza un array para almacenar la relación letra, número.
-->

<?php

    
    /**
     * Función para obtener la letra de un dni.
     */

     function obtenerLetraDni($num){
        $arrayLetras = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N","J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E", "T");
        $stringLetras=implode("", $arrayLetras);
        $letraCalculada = substr($stringLetras,$num%23,1);
        
        return $letraCalculada;
     }
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
           
            if(isset( $_GET["dni"])){
                echo "<h1>Letra DNI</h1>";
                echo "<p>La letra de su DNI es la: ".obtenerLetraDni($_GET["dni"])."</p>";
                echo "<a href=\"./Ejercicio1.php\"><button>Volver</button></a>";
            }
            else{
                echo "<h1>Letra DNI</h1>";
                echo "<form action=\"Ejercicio1.php\" method=\"get\">";
                    echo "<p>Introduzca el número de su dni para ver su letra.</p>";
                    echo "<label><p>Número de Dni: </p><input type=\"number\" name=\"dni\" value=\"\" required></input></label></br>";
                    echo "</br></br><input type=\"submit\" value=\"Enviar\" name=\"\"></button>";
                echo "</form>";
                echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
            }
            
            
            
           
           
        ?>
    </section>  
</body>
</html>