<?php
/**
* Sesiones
* 1. Crear una aplicación para gestionar una agenda de contactos. 
* 
* $agenda = array(
*              array(nombre => ' ' ,Telefono =>' '),
* )
* 
* @author Rafael Miguel Cruz Álvarez
*/

session_start();

$lProcesarFormulario=false;
$vNombre = "";
$vTelefono = "";
$msgErrorNombre="";
$msgErrorTelefono="";

if (!isset($_SESSION["agenda"])){
   $_SESSION["agenda"] = array();
   
}

if (isset($_POST["annadirContacto"])){
    $lProcesarFormulario = true;
    $vNombre = limpiarDatos($_POST["nombre"]);
    $vTelefono= limpiarDatos($_POST["telefono"]);
}

if(empty($_POST["nombre"])){
    $msgErrorNombre = "<font color='red'>* Introduzca un nombre. <br></font>";
    $lProcesarFormulario=false;
    $vNombre="";
}

if(empty($_POST["telefono"])){
    $msgErrorTelefono = "<font color='red'>* Introduzca un teléfono. <br></font>";
    $lProcesarFormulario=false;
    $vTelefono="";
}

if (isset($_POST["logout"])){
    session_unset();
    session_destroy();
    session_start();
    session_regenerate_id(true);
    header("Location:Ejercicio1.php");
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
    <title>Ejercicio 1</title>
</head>
<body>
    <section>
        <?php

            echo "<h1>Agenda de Contactos</h1>";
            echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."\" method=\"post\">";
                echo "<label><p>Nombre: </p><input type=\"text\" name=\"nombre\" value=\"$vNombre\"></input></label>";
                if (empty($_POST["nombre"]))
                        echo $msgErrorNombre."</br>";
                    else{
                        echo "</br>";
                    }
                echo "<label><p>Teléfono: </p><input type=\"text\" name=\"telefono\" value=\"$vTelefono\"></input></label>";
                if (empty($_POST["telefono"]))
                        echo $msgErrorTelefono."</br>";
                    else{
                        echo "</br>";
                    }
                echo "</br></br><input type=\"submit\" name=\"annadirContacto\" value=\"Añadir Contacto\" ></button>";
                echo "  <input type=\"submit\" name=\"mostrarContacto\" value=\"Mostrar Contactos\" ></button>";
            echo "</form>";

            if($lProcesarFormulario == true){
                if(isset($_POST["annadirContacto"])){
                    $arrayContacto = array("nombre" => $vNombre, "telefono" => $vTelefono);
                    array_push($_SESSION["agenda"],$arrayContacto);//También se puede hacer asi y no usar array_push $_SESSION["agenda"][] = array("nombre" => $vNombre, "telefono" => $vTelefono);
                    echo "Se ha añadido un nuevo contacto.";
                }
            }
            
            if($lProcesarFormulario == false){
                if(isset($_POST["mostrarContacto"])){
                    echo "<table border=1>";
                    echo "<tr><th>Nombre</th><th>Teléfono</th></tr>";
                    foreach($_SESSION["agenda"] as $valor){
                        echo "<td>".$valor["nombre"]."</td>";
                        echo "<td>".$valor["telefono"]."</td>";
                        echo "<tr></tr>";
                    }
                    echo "</table>";
                }
            }

            echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."\" method=\"post\">";
                echo "</br></br><input type=\"submit\" name=\"logout\" value=\"Cerrar Sesion\" ></button>";
            echo "</form>";

        
            echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a></br>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema2-Cookies_Sesiones/Sesiones/Ejercicio1.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>