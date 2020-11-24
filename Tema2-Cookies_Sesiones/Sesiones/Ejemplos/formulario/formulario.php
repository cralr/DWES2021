<?php
/**
 * Ejercicio formulario con array de sesiones
 */

    session_start();

    $lProcesarFormulario=false;
    $vFecha = "";
    $vTarea = "";
    $msgErrorFecha="";
    $msgErrorTarea="";

    if(!isset($_SESSION["tareas"])){
        $_SESSION["tareas"] = array();
    }

    if (isset($_POST["annadirTarea"])){
        $lProcesarFormulario = true;
        $vFecha = limpiarDatos($_POST["fecha"]);
        $vTarea = limpiarDatos($_POST["tarea"]);
    }

    if(empty($_POST["fecha"])){
        $msgErrorFecha = "<font color='red'>* Introduzca una fecha. <br></font>";
        $lProcesarFormulario=false;
        $vFecha="";
    }

    if(empty($_POST["tarea"])){
        $msgErrorTarea = "<font color='red'>* Introduzca una tarea. <br></font>";
        $lProcesarFormulario=false;
        $vTarea="";
    }

    if (isset($_POST["logout"])){
        session_unset();
        session_destroy();
        session_start();
        session_regenerate_id(true);
        header("Location:formulario.php");
    }

    /**
     * Función para limpiar la entrada de datos
     * @param limpiar
     */
    function limpiarDatos($limpiar){
        $error = trim($limpiar);
        $error = stripslashes($limpiar);
        $error =  htmlspecialchars($limpiar);
        return $error;
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
    <title>Formulario</title>
</head>
<body>
    <section>
        <?php
            echo "<form action=\"formulario.php\" method=\"post\">";
                echo "<label><p>Fecha: </p><input type=\"text\" name=\"fecha\" value=\"\" placeholder=\" \"></input></label>";
                if (empty($_POST["fecha"]))
                        echo $msgErrorFecha."</br>";
                    else{
                        echo "</br>";
                    }
                echo "<label><p>Tarea: </p><input type=\"text\" name=\"tarea\" value=\"\"></input></label>";
                if (empty($_POST["tarea"]))
                        echo $msgErrorTarea."</br>";
                    else{
                        echo "</br>";
                    }
                echo "</br></br><input type=\"submit\" name=\"annadirTarea\" value=\"Añadir Tarea\" ></button>";
                echo "  <input type=\"submit\" name=\"mostrar\" value=\"Mostrar Tareas\" ></button>";
            echo "</form>";

            if($lProcesarFormulario == true){
                if(isset($_POST["annadirTarea"])){
                    $_SESSION["tareas"][] = array("fecha" => $_POST["fecha"], "tarea" => $_POST["tarea"]);
                    echo "Tarea añadida.</br>";
                }
            }
            
            if($lProcesarFormulario == false){
                if(isset($_POST["mostrar"]))
                foreach($_SESSION["tareas"] as $key => $valor){
                    echo $valor["fecha"]."-----".$valor["tarea"]."</br>";
                }
            }
            
           
            echo "<form action=\"formulario.php\" method=\"post\">";
                echo "</br></br><input type=\"submit\" name=\"logout\" value=\"Cerrar Sesion\" ></button>";
            echo "</form>";

            echo "</br><a href=\"../../../../index.php?page=dwes\"><button>Volver</button></a></br>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema2-Cookies_Sesiones/Sesiones/Ejemplos/formulario/formulario.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>
