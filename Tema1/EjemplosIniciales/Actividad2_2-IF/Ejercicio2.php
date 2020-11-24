
<!--
    Ejercicio 2.- Cargar en variables mes y año e indicar el número de días del mes.
-->

<?php

    $mes="Marzo";
    $anyo=2020;
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaginaInicio/css/style.css">
    <link rel="stylesheet" href="/PaginaInicio/css/normalize.css">
    <title>Ejercicio 2</title>
</head>
<body>
    <header>
        <h1>Ejercicio 2</h1>
    </header>
    <section>
        <?php
            if($mes=="Enero"||$mes=="Marzo"||$mes=="Mayo"||$mes=="Julio"||$mes=="Agosto"||$mes=="Octubre"||$mes=="Diciembre"){
                echo "$mes de $anyo tiene 31 días.";
            }
            elseif($mes=="Abril"||$mes=="Junio"||$mes=="Septiembre"||$mes=="Noviembre"){
                echo "$mes de $anyo tiene 30 días.";
            }
        
            if ($mes=="Febrero"){
                if (($anyo % 4 == 0 ) && ($anyo % 100 != 0 ) || ($anyo % 400 == 0 )){
                    echo "$mes de $anyo es bisiesto y tiene 29 días.";
                }
                else    
                    echo "$mes de $anyo no es bisiesto y tiene 28 día.";
            }

            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_2-IF/Ejercicio2.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>