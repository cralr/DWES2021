<!--

    Ejercicio 5 Mejorado-  Dado un mes y un año, mostrar el calendario del mes. Marcar el día actual en verde y los
    festivos en rojo. Usando arrays para los meses y formulario para elegir mes y año.

-->

<?php

    //Variables
    $anyoActual = date("Y"); //Función para obtene el año.
    $nMesActual = date("n"); //Función para obtener el número del mes.
    $diaActual = date("j");//Función para obtene el día.
        
    //Calcular días Febrero
    function esBisiesto($anyoActual){
        if (($anyoActual % 4 == 0 ) && ($anyoActual % 100 != 0 ) || ($anyoActual % 400 == 0 ))
    {
        return 29;
    }
    else    
        return 28;
    }
    

    //Array asociativo en el que se guardaran tanto el mes como su total de días y festivos.
    $arrayMeses = array (
                "Enero" => array("nDias" => 31,
                                 "diasFestivos" => array(1,6)
                                ),

                "Febrero" => array("nDias" => esBisiesto($anyoActual),
                                "diasFestivos" => array(28)
                                ),

                "Marzo" => array("nDias" => 31,
                                    "diasFestivos" => array()
                ),

                "Abril" => array("nDias" => 30,
                                    "diasFestivos" => array()
                ),

                "Mayo" => array("nDias" => 31,
                                    "diasFestivos" => array(1)
                ),

                "Junio" => array("nDias" => 30,
                                    "diasFestivos" => array()
                ),

                "Julio" => array("nDias" => 31,
                                    "diasFestivos" => array()
                ),

                "Agosto" => array("nDias" => 31,
                                    "diasFestivos" => array()
                ),

                "Septiembre" => array("nDias" => 30,
                                    "diasFestivos" => array()
                ),

                "Octubre" => array("nDias" => 31,
                                    "diasFestivos" => array(12)
                ),

                "Noviembre" => array("nDias" => 30,
                                    "diasFestivos" => array(1)
                ),

                "Diciembre" => array("nDias" => 31,
                                    "diasFestivos" => array(6,8,25)
                ),             
    );


   
    $mesActual = array_keys($arrayMeses)[$nMesActual-1];//array_keys lo que hace es devolver la clave del array que en este caso son los meses, obtenemos el mes con la función date y le restamos 1 ya que el array empieza por 0 para que este sea Enero.  


    //Control Formulario.

    if(isset($_POST["enviar"])){
        $nMesActual = $_POST["meses"];
        $mesActual = array_keys($arrayMeses)[$nMesActual-1];
        $anyoActual = $_POST["anyo"];
        if(empty($_POST["meses"])){
            echo "El mes no puede estar vacío";
        }
        if(empty($_POST["anyo"])){
            echo "El año no puede estar vacío";
        }
    }


    $nDiasMes = $arrayMeses[$mesActual]["nDias"];
    $diaSemana = date("w",strtotime($anyoActual."-".$nMesActual."-"."1")); //Obtenemos con esta función donde empieza el primer de día de la semana
    $numeroHuecos = (($diaSemana+6)%7); //Sabiendo número donde empieza el día de la semana se suma 6 por el resto de huecos y a esto se le hace el módulo de 7 porque es el número de huecos totales.
    
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

        <form action="Ejercicio1.php" method="POST">
        <?php 
            echo "Mes:<select name=\"meses\">";
            $i=1;
                foreach($arrayMeses as $clave => $valor){
                    $mesSeleccionado = ($clave==$mesActual) ? "Selected" : "";
                    echo "<option value=\"".$i."\"".$mesSeleccionado.">".$clave."</option>" ;
                    $i++;
                }
            echo "</select>";
            echo "<br/>";
            echo "Año: <input type=\"text\" name=\"anyo\" >";
            
        ?>
        <input type="submit" name="enviar" value="Enviar">
        </form>
     
        <?php
    
            echo "<br/><table border='1'>";
                echo "<tr><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sabado</th><th>Domingo</th></tr>";

                for($i=0;$i<$numeroHuecos;$i++)
                    echo "<td> </td>";
                
                for($i=1;$i<=$nDiasMes;$i++){
                    if((($i+$numeroHuecos)%7)==0){
                        echo "<td style=background-color:red;>$i</td>";
                        echo "</tr><tr>";
                    }
                    elseif ($i == date("j")) {
                        echo "<td style=' background-color: green'>".$i."</td>";
                    }
                    else{
                        if(in_array($i,$arrayMeses[$mesActual]['diasFestivos'], TRUE)){
                            echo "<td style=background-color:red;>$i</td>";
                        }
                        else
                            echo "<td>$i</td>";
                        }
                    }
            echo "</table>";
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_5Formularios/Ejercicio1.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>