<?php
    include "logout.php";
    session_start();
    $aut = $_SESSION["aut"] ?? false;

    if (isset($_POST["logout"])){
        cerrarSesion();
    }


    if(!$aut){
        header("Location:autentificacion.php?error=1");
    }else{

        echo "Área Privada.";

        echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."\" method=\"post\">";
            echo "</br><input type=\"submit\" name=\"logout\" value=\"Cerrar Sesion\" >";
        echo "</form>";
    }

?>