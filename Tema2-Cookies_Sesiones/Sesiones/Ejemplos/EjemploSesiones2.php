<?php

    session_start();

    //echo session_id(); muestra un id que debe ser igual en la otra página.

    echo "Página 2</br>";

    $_SESSION["mensaje"]="Hola mundo Script 2";

    echo $_SESSION["mensaje"];
    
    echo "</br><a href=\"EjemploSesiones.php\">Página 1</a>";
    
?>