<!--

    Ejercicio 5 -  Dado un mes y un año, mostrar el calendario del mes. Marcar el día actual en verde y los
    festivos en rojo.

-->

<?php

    //Variables
    $mesActual = date("n");
    $anyoActual = date("Y");
    $diaActual = date("j");
    $mesActualLetra = date("F");

    $diaSemana = date("w",strtotime($anyoActual."-".$mesActual."-"."1")); //Obtenemos con esta función donde empieza el primer de día de la semana
    $numeroHuecos = (($diaSemana+6)%7); //Sabiendo número donde empieza el día de la semana se suma 6 por el resto de huecos y a esto se le hace el módulo de 7 porque es el número de huecos totales.
 

    switch($mesActual){
        case 1: 
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12: $dias = 31;
                 break;

        case 4: 
        case 6: 
        case 9: 
        case 11: $dias = 30;
                 break;

        case 2: if (($anyoActual % 4 == 0 ) && ($anyoActual % 100 != 0 ) || ($anyoActual % 400 == 0 ))
                {
                    $dias = 29;
                }
                else    
                    $dias = 28;
                break;
      
       
    }

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
    <header>
        <h1>Ejercicio 5</h1>
    </header>
    <section>
        <?php
        
            echo "<p><b>Calendario ".$mesActualLetra." ".$anyoActual."</b></p>";

            echo "<br/><table border='1'>";
                echo "<tr><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sabado</th><th>Domingo</th></tr>";

                for($i=0;$i<$numeroHuecos;$i++)
                    echo "<td> </td>";
                
                for($i=1;$i<=$dias;$i++){
                    if((($i+$numeroHuecos)%7)==0){
                        echo "<td style=background-color:red;>$i</td>";
                        echo "</tr><tr>";
                    }
                    elseif ($i == date("j")) {
                        echo "<td style=' background-color: green'>".$i."</td>";
                    }
                    else{
                        echo "<td>".$i."</td>";
                    }
                }
            echo "</table>";
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_3-FOR/Ejercicio5.php\"><button>Ver Código</button></a></br>";

           
        ?>
    </section>  
</body>
</html>