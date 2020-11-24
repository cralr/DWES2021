
<!-- Ejercicio 5 Funciones.
    5. Escribir un script que muestre una lista de enlaces. 
    Los enlaces serán creados por una función que recibirá como como parámetro un array con las opciones necesarias.
-->
<?php

    $arrayEnlaces = array(
                            array("modulo"=>"Dwes",
                                  "ejercicios"=>array("Ejercicio1.php",
                                                      "Ejercicio2.php")),
                            array("modulo"=>"Dwec",
                                  "ejercicios"=>array("Ejercicio1.js",
                                                    "Ejercicio2.js")),
);
 
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaginaInicio/css/style.css">
    <link rel="stylesheet" href="/PaginaInicio/css/normalize.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <section>
        <?php
           
           foreach($arrayEnlaces as $valor){
               echo $valor["modulo"]."</br>";
            foreach($valor["ejercicios"] as $indiceEj => $datosEj){
                echo $datosEj."</br>";
            }
            }

            echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_6Funciones/Ejercicio5.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>