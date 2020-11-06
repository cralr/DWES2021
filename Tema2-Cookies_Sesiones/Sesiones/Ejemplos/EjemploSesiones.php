<?php
    
    include "funciones.php";

    session_start();

    //echo session_id(); muestra un id que debe ser igual en la otra página.

    if (!isset($_SESSION["horaInicio"])){
        $_SESSION["horaInicio"] = time();
        $_SESSION["contador"]=0;
    }

    $_SESSION["contador"]++;
    echo $_SESSION["contador"]."</br>";

    echo "Hora de Inicio</br>";
    echo $_SESSION["horaInicio"]."</br></br>";
    $horaActual = time();
    echo "Hora Actual</br>";
    echo $horaActual."</br>";

    echo "</br>Tiempo actual</br>";
    $tiempoTranscurrido =  $horaActual - $_SESSION["horaInicio"];
    echo $tiempoTranscurrido."</br>";

    if ($tiempoTranscurrido > 10){
        session_unset();
        session_destroy();
        session_start();
        session_regenerate_id(true);
        header("Location:EjemploSesiones.php");
    } 


    echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema2-Cookies_Sesiones/Sesiones/Ejemplos/EjemploSesiones.php\"><button>Ver Código</button></a></br>";

    
?>