<!--
    Ejercicio 4.- Estaciones del año.
-->

<?php
    $mes = date("n");
    $dia = date("j");
    

    switch ($mes){
        case 1:
            $estacion = "invierno";
            break;

        case 4:
        case 5:
            $estacion = "primavera";
            break;

        case 7:
        case 8:
            $estacion = "verano";
            break;

        case 10:
        case 11:
            $estacion = "otonno";
            break;

        case 3:
            if ($dia < 21)
                $estacion = "invierno";
            else
                $estacion = "primavera";
            break;

        case 6:
            if ($dia < 21)
                $estacion = "primavera";
            else
                $estacion = "verano";
            break;

        case 9:
            if ($dia < 23)
                $estacion = "verano";
            else
                $estacion = "otonno";
            break;

        case 12:
            if ($dia < 21)
                $estacion = "otonno";
            else
                $estacion = "invierno";
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
<title>Ejercicio 4</title>
</head>
<body>
<header>
    <h1>Ejercicio 4</h1>
</header>
<section>
    <?php   
    
    $directorio = "img/" . $estacion . ".jpg";

    echo "Estamos en ".$estacion;
    echo "<img src=\"$directorio\" style='width: 750px; height: 450px; margin: 10px auto; display: block'>"; 
    echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
    echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_2-IF/Ejercicio4.php\"><button>Ver Código</button></a></br>";

    ?>
</section>  
</body>
</html>