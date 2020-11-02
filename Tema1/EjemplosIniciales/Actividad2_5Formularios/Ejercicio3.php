
<!-- Ejercicio 3 Formularios.
   3. Utilizando el array de continentes y países, crea un script que lea en un formulario un continente
    y nos muestre sus países con sus capitales y banderas.
-->

<?php

     //Array de Continentes

    $arrayContinentes = array ( 
                    "Europa" => array(
                        "Albania" => array(
                            "capital" => "Tirana", 
                            "bandera" => "<img src=./banderas/albania-bandera-200px.jpg>"),
                        "Alemania" => array(
                            "capital" => "Berlin",
                            "bandera" => "<img src=./banderas/alemania-bandera-200px.jpg>")),
                    "Africa" => array(
                        "Angola" => array(
                            "capital" => "Luanda",
                            "bandera" =>"<img src=./banderas/angola-bandera-200px.jpg>"))                             
    );  

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
                $continente = $_POST["continente"];
                echo "<h1>Ejercicio 3: Continentes y Paises </h1>";
                echo "<b>".$continente."</b>";
                echo "<table border=\"1px solid black\">";
                echo "<tr><td><b>Pais</b></td><td><b>Capital</b></td><td><b>Bandera</b></td></tr>";
                foreach($arrayContinentes as $claveContinente => $paises){
                    if($claveContinente == $continente){
                        foreach($paises as $infoPais => $datos){
                            echo "<td>$infoPais</td>";
                            foreach($datos as $clave =>$valor){
                                echo "<td>".$valor."</td>";                          
                            }
                            echo "</tr>";
                        }
                    }
                }
                echo "</table>";
            }else{
                
            echo "<h1>Ejercicio 3: Continentes y Paises </h1>";
            echo "<form action=\"Ejercicio3.php\" method=\"post\">";
            echo "<p>Elige un continente :<select name=\"continente\"></p>";
            foreach($arrayContinentes as $continentes => $value){
                echo "<option value=\"$continentes\">$continentes</option>";
            } 
            echo "</select></p>";
            echo "<input type=\"submit\" name=\"enviar\" value=\"Enviar\">";
            echo "</form>";
            echo "</br>";
            }

            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_5Formularios/Ejercicio3.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>