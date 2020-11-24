
<!--

    Ejemplo array de comunidades y provincias

-->

<?php

    //Array de comunidades

    $arrayComunidades = array (
                            array("comunidad"=>"Andalucia",
                            "provincias"=> array("Jaén" =>  60,
                                                "Córdoba" =>  80, 
                                                "Sevilla" =>  50, 
                                                "Huelva" =>  20, 
                                                "Cadiz" =>  60, 
                                                "Málaga"  =>  100, 
                                                "Granada" =>  70,
                                                "Almería" =>  40)),
 
                            array("comunidad"=>"Aragón", 
                                "provincias" => array("Huesca"=>  150, 
                                                        "Teruel"=>  200,
                                                        "Zaragoza"=>  100)),
                            
                            array("comunidad"=>"Madrid", 
                            "provincias"=> array("Madrid"=>  5000)),

                            array("comunidad"=>"Asturias", 
                                "provincias" => array("Oviedo"=>  150)),

                            array("comunidad"=>"Baleares", 
                                "provincias" => array("Palma de Mallorca"=>  150)),

                            array("comunidad"=>"Canarias", 
                                "provincias" => array("Santa Cruz de Tenerife"=>  150, 
                                                      "Las Palmas de Gran Canaria"=>  150)),
                                
                            array("comunidad"=>"Cantabria", 
                                "provincias" => array("Santander"=>  150)),
                                
                            array("comunidad"=>"Castilla la Mancha", 
                                "provincias" => array("Albacete"=>  150, 
                                                      "Ciudad Real"=>  150,
                                                      "Cuenca"=>  150,
                                                      "Guadalajara"=>  150,
                                                      "Toledo"=>  150)),
            
                            array("comunidad"=>"Castilla y León", 
                                "provincias"=> array("Ávila"=>  150,
                                                    "Burgos"=>  150,
                                                    "León"=>  150,
                                                    "Palencia"=>  150,
                                                    "Salamanca"=>  150,
                                                    "Segovia"=>  150,
                                                    "Soria"=>  150,
                                                    "Valladolid" =>  150,
                                                    "Zamora" =>  150)),
                                
                            array("comunidad"=>"Cataluña", 
                                 "provincias"=> array("Barcelona"=>  150,
                                                      "Gerona"=>  150,
                                                      "Lérida"=>  150,
                                                      "Tarragona"=>  150)),
                        
                            array("comunidad"=>"COmunidad Valenciana", 
                                 "provincias"=> array("Alicante"=>  150,
                                                      "Castellón de la Plana"=>  150,
                                                      "Valencia"=>  150)),
                                 
                            array("comunidad"=>"Extremadura", 
                                 "provincias"=> array("Badajoz"=>  150,
                                                      "Cáceres"=>  150)),
                                
                            array("comunidad"=>"Galicia", 
                                "provincias"=> array("La Coruña"=>  150,
                                                     "Lugo"=>  150,
                                                     "Orense"=>  150,
                                                     "Pontevedra"=>  150)),
                            
                        
                            array("comunidad"=>"Murcia", 
                                "provincias"=> array("Murcia"=>  150)),
                                
                            array("comunidad"=>"Navarra", 
                                "provincias"=> array("Pamplona"=>  150,
                                                     "País Vasco"=>  150,
                                                     "San Sebastián"=>  150,
                                                     "Vitoria"=>  150)),
                            
                            array("comunidad"=>"La Rioja", 
                                "provincias"=> array("Logroño"=>  150)),

    );


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/PaginaInicio/css/style.css">
    <link rel="stylesheet" href="/PaginaInicio/css/normalize.css">
    <title>Ejemplo Array</title>
</head>
<body>
    <header>
        <h1>Comunidades</h1>
    </header>
    <section>
        <?php
            $totalCasos = 0;
            foreach ($arrayComunidades as $valor) {
            
                echo "<b>La Comunidad de ".$valor["comunidad"]. " tiene como provincias:</b></br>";

                foreach($valor["provincias"] as $provincias =>$casos){  
                    echo "<p>".$provincias." tiene ".$casos." casos por Covid19</p>";
                    $totalCasos += $casos;
                }
                if($totalCasos > 500)
                    echo "<p class='rojo'><b>".$valor["comunidad"]." tiene un total de ".$totalCasos." casos por COVID-19</b></p>"; 
                else
                    echo "<p class='verde'><b>".$valor["comunidad"]." tiene un total de ".$totalCasos." casos por COVID-19</b></p>"; 
                $totalCasos=0;
            }     
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_4Array/Comunidades.php\"><button>Ver Código</button></a></br>";
   
        ?>
        
    </section>  
</body>
</html>

