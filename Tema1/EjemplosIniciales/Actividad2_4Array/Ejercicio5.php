
<!--

    Ejercicio 5 Array: Información sobre continentes, países, capitales y banderas.

-->

<?php
    //Array de meses

    $arrayInformacion = array (
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
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <header>
        <h1>Ejercicio 5: Continentes</h1>
    </header>
    <section>
        <?php
              foreach($arrayInformacion as $continentes => $paises){
                echo "<h3>$continentes</h3>";
                echo "<table border=\"1px solid black\" width=\"500px\">";
                echo "<tr><td><b>Pais</b></td><td><b>Capital</b></td><td><b>Bandera</b></td></tr>";
                echo "<tr>";
                foreach($paises as $infoPais => $datos){
                    echo "<td>$infoPais</td>";
                    foreach($datos as $clave =>$valor){
                        echo "<td>".$valor."</td>";                          
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
            echo "</table>";
        ?>
    </section>  
</body>
</html>

