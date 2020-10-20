
<!--

    Ejercicio 5 Array: Información sobre continentes, países, capitales y banderas.

-->

<?php

    //Array de meses

    $arrayInformacion = array (
                            array("continente" => "Europa", 
                                  "paises"=> array( "Albania" => array("Tirana"=>"<img src=./banderas/albania-bandera-200px.jpg>"))),

                            array("continente" => "Europa", 
                                  "paises"=> array( "Alemania" => array("Berlín"=>"<img src=./banderas/alemania-bandera-200px.jpg>"))),


                            
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
            echo "Continentes y Paises.</br>";
            echo "<table border=1>";
            echo "<tr><th>Continente</th><th>País</th><th>Capital</th><th>Bandera</th></tr>";
            foreach ($arrayInformacion as $valorContinente) {
                    echo "<td>".$valorContinente["continente"]."</td>";
                    foreach($valorContinente["paises"] as $indicePais => $valorPais){
                        echo "<td>".$indicePais."</td>";
                        foreach ($valorPais as $capital => $bandera) {
                            echo "<td>".$capital."</td>";
                            echo "<td>".$bandera."</td>";
                            echo "<tr></tr>";
                        }
                        
                    }
                    
                }
                
            echo "</table>";
            
            
            
            /* echo "Continentes y Paises.</br>";
            echo "<table border=1>";
            echo "<tr><th>País</th><th>Capital</th><th>Bandera</th></tr>";
            foreach ($arrayInformacion as $indiceContinente => $valorContinente) {
                echo "<b>$indiceContinente</b></br>";
                foreach($valorContinente as $indicePais => $valorPais){
                    echo "<td>".$indicePais."</td>";    
                    echo "<td>".$valorPais["capital"]."</td>"; 
                    echo "<td>".$valorPais["bandera"]."</td>"; 
                    echo "<tr></tr>";            
                }        
            }    
            echo "</table>";                   
         */
        ?>
    </section>  
</body>
</html>



<!-- $arrayInformacion = array ("Europa"=> array( "Albania" => array("capital"=>"Tirana",
                                                                    "bandera"=>"<img src=./banderas/albania-bandera-200px.jpg>"),
                                                 "Alemania" => array("capital"=>"Berlín",
                                                                    "bandera"=>"<img src=./banderas/alemania-bandera-200px.jpg>")),

                                "África"=> array( "Angola" => array("capital"=>"Luanda",
                                                                    "bandera"=>"<img src=./banderas/albania-bandera-200px.jpg>"),
                                                

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
        
    </section>  
</body>
</html> -->