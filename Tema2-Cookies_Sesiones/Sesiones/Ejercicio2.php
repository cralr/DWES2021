<?php
/**
* Sesiones
* 2. Crear una pequeña aplicación que permita la gestión académica del módulo de DWES. 
* Interesa almacenar las notas de cada trimestre y mostrar un informe con la nota media.
* 
* @author Rafael Miguel Cruz Álvarez
*/

session_start();

$lProcesarFormulario;
$vAlumno = "";
$vTrimestre = "";
$vNota = "";
$msgErrorAlumno="";
$msgErrorTrimestre="";
$msgErrorNota="";

if (!isset($_SESSION["gestion"])){
   $_SESSION["gestion"] = array();
   
}

if (isset($_POST["annadirNota"])){
    $lProcesarFormulario = true;
    $vAlumno= limpiarDatos($_POST["nombre"]);
    $vTrimestre= limpiarDatos($_POST["trimestre"]);
    $vNota= limpiarDatos($_POST["nota"]);
}

if(empty($_POST["nombre"])){
    $msgErrorAlumno = "<font color='red'>* Introduzca el nombre de un Alumno. <br></font>";
    $lProcesarFormulario=false;
    $vAlumno="";
}

if(empty($_POST["trimestre"])){
    $msgErrorTrimestre = "<font color='red'>* Introduzca un Trimestre. <br></font>";
    $lProcesarFormulario=false;
    $vTrimestre="";
}

if(empty($_POST["nota"])){
    $msgErrorNota = "<font color='red'>* Introduzca una Nota. <br></font>";
    $lProcesarFormulario=false;
    $vNota="";
}

if (isset($_POST["logout"])){
    session_unset();
    session_destroy();
    session_start();
    session_regenerate_id(true);
    header("Location:Ejercicio2.php");
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
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Ejercicio 1</title>
</head>
<body>
    <section>
        <?php

            echo "<h1>Agenda de Contactos</h1>";
            echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."\" method=\"post\">";
                echo "<label><p>Nombre Alumno: </p><input type=\"text\" name=\"nombre\" value=\"$vAlumno\"></input></label>";
                if (empty($_POST["nombre"]))
                        echo $msgErrorAlumno."</br>";
                    else{
                        echo "</br>";
                    }
                echo "<label><p>Trimestre: </p><input type=\"text\" name=\"trimestre\" value=\"$vTrimestre\"></input></label>";
                if (empty($_POST["trimestre"]))
                        echo $msgErrorTrimestre."</br>";
                    else{
                        echo "</br>";
                    }
                echo "<label><p>Nota: </p><input type=\"number\" name=\"nota\" value=\"$vTrimestre\" min=0 max=10 ></input></label>";
                if (empty($_POST["nota"]))
                        echo $msgErrorNota."</br>";
                    else{
                        echo "</br>";
                    }
                echo "</br></br><input type=\"submit\" name=\"annadirNota\" value=\"Añadir Notas\" ></button>";
                echo "  <input type=\"submit\" name=\"mostrar\" value=\"Mostrar Notas\" ></button>";
            echo "</form>";

            if($lProcesarFormulario == true){
                if(isset($_POST["annadirNota"])){
                    $_SESSION["gestion"][] = array("nombre" => $vAlumno, "trimestre" => $vTrimestre,"nota"=>$vNota);
                    echo "Se ha añadido una nueva nota.";
                }
            }
            
            if($lProcesarFormulario == false){
                if(isset($_POST["mostrar"])){
                    echo "<table border=1>";
                    echo "<tr><th>Alumno</th><th>Trimestre</th><th>Nota</th></tr>";
                    foreach($_SESSION["gestion"] as $indice => $valor){
                            echo "<td>".$valor["nombre"]."</td>";
                            echo "<td>".$valor["trimestre"]."</td>";
                            echo "<td>".$valor["nota"]."</td>";
                            echo "<tr></tr>";
                        }
                    
                    echo "</table>";
                }
                
            }

            echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."\" method=\"post\">";
                echo "</br></br><input type=\"submit\" name=\"logout\" value=\"Cerrar Sesion\" ></button>";
            echo "</form>";

        
            echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a></br>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema2-Cookies_Sesiones/Sesiones/Ejercicio2.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>