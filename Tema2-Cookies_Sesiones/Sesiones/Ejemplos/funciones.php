<?php

  /**
     * Función para cerrar la sesión
     */
    function cerrarSesion(){
        session_unset();
        session_destroy();
        session_start();
        session_regenerate_id(true);
        header("Location:EjemploSesiones.php");
    }


?>