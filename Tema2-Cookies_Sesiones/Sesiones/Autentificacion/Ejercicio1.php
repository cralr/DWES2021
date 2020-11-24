<?php

/**
 * Ejercicio autenticacion
 */

    include "logout.php";
    session_start();

    $lProcesarFormulario;
    $vUsuario= "";
    $vPass = "";
    $msgErrorUsuario="";
    $msgErrorPass="";
    $usuarioIncorrecto="";

    if(!isset($_SESSION["aut"])){
        $_SESSION["aut"] = false;
        $_SESSION["perfil"] = "invitado";
        $_SESSION["contador"] = 0;
    }

    if (isset($_POST["login"])){
        $lProcesarFormulario = true;
        $vUsuario = limpiarDatos($_POST["user"]);
        $vPass = limpiarDatos($_POST["pass"]);
        if ($vUsuario == "admin" && $vPass =="admin" && $_SESSION["contador"] < 3 ){
            $_SESSION["aut"] = true;
            $_SESSION["user"] = $vUsuario;
        }else{
            $_SESSION["contador"]++;
            $usuarioIncorrecto = "<b>Usuario Incorrecto</b>";
        }
    }

    if(empty($_POST["usuario"])){
        $msgErrorUsuario= "<font color='red'>* Introduzca un usuario. <br></font>";
        $lProcesarFormulario=false;
        $vUsuario="";
    }

    if(empty($_POST["pass"])){
        $msgErrorPass = "<font color='red'>* Introduzca una contraseña. <br></font>";
        $lProcesarFormulario=false;
        $vPass="";
    }

    if (isset($_POST["logout"])){
            cerrarSesion();
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
            echo "<h1>Autentificación</h1>";
             if ($_SESSION["aut"]) {
                echo "Ha iniciado sesión como ".$_SESSION["user"].".<br/><br/>";
                echo "<a href=\"privado.php\">Área privada</a><br/><br/>";
                echo "<a href=\"publico.php\">Área pública</a><br/><br/>";
                echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."\" method=\"post\">";
                    echo "<input type=\"submit\" name=\"logout\" value=\"Cerrar Sesion\" >";
                echo "</form>";
            } else {
                
                if ($_SESSION["contador"]<3){
                    echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."\" method=\"post\">";
                    echo "<label><p>Usuario: </p><input type=\"text\" name=\"user\" value=\"$vUsuario\"></input></label>";
                    if (empty($_POST["user"]))
                            echo $msgErrorUsuario."</br>";
                        else{
                            echo "</br>";
                        }
                    echo "<label><p>Contraseña: </p><input type=\"password\" name=\"pass\" value=\"$vPass\"></input></label>";
                    if (empty($_POST["pass"]))
                            echo $msgErrorPass."</br>";
                        else{
                            echo "</br>";
                        }
                    echo "</br>".$usuarioIncorrecto;
                    echo "</br></br><input type=\"submit\" name=\"login\" value=\"Iniciar Sesion\" >";
                echo "</form>";
                }
                else{
                    echo "USUARIO BLOQUEADO";
                }    
                
                
            }
            echo "</br><a href=\"../../../../index.php?page=dwes\"><button>Volver</button></a></br>";

            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema2-Cookies_Sesiones/Sesiones/Ejemplos/autentificacion/autentificacion.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>