<?php
/**
* Sesiones
* 2. Crear una pequeña aplicación que permita la gestión académica del módulo de DWES. 
* Interesa almacenar las notas de cada trimestre y mostrar un informe con la nota media.
* 
* @author Rafael Miguel Cruz Álvarez
*/

    session_start();
    

    if (!isset($_SESSION["gestion"])){
        $_SESSION["gestion"] = array();
    }

    function control(){
        
        $vAlumno="";
        $vNota="";
        $vTrimestre="";
        $msgErrorAlumno="";
        $msgErrorNota="";
        $msgErrorTrimestre="";

        if(isset($_POST["nuevaNota"])){
            echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."\" method=\"post\">";
                echo "<label><p>Alumno: </p><input type=\"text\" name=\"alumno\" value=\"$vAlumno\"></input></label></br>";
                if (empty($_POST["alumno"]))
                            echo $msgErrorAlumno."</br>";
                        else{
                            echo "</br>";
                        }
                echo "<label><p>Trimestre: </p><input type=\"text\" name=\"trimestre\" value=\"$vTrimestre\"></input></label></br>";
                if (empty($_POST["trimestre"]))
                            echo $msgErrorTrimestre."</br>";
                        else{
                            echo "</br>";
                        }
                echo "<label><p>Nota: </p><input type=\"text\" name=\"nota\" value=\"$vNota\"></input></label></br>";
                if (empty($_POST["nota"]))
                            echo $msgErrorNota."</br>";
                        else{
                            echo "</br>";
                        }
                echo "</br></br><input type=\"submit\" name=\"annadirNota\" value=\"Añadir Nota\" ></button>";
            echo "</form>";
        }

        if(isset($_POST["annadirNota"])){
            $vAlumno = limpiarDatos($_POST["alumno"]);
            $vNota = limpiarDatos($_POST["nota"]);
            $vTrimestre = limpiarDatos($_POST["trimestre"]);
            $arrayNotas = array("alumno" => $vAlumno, "trimestre" => $vTrimestre, "nota" => $vNota);
            array_push($_SESSION["gestion"],$arrayNotas);
            echo "Se ha añadido una nueva nota.";
        }

        if (isset($_POST["mostrar"])){
            echo "<table border=1>";
            echo "<tr><th>Alumno</th><th>Trimestre</th><th>Nota</th></tr>";
            foreach($_SESSION["gestion"] as $indice => $valor){
                    echo "<td>".$valor["alumno"]."</td>";
                    echo "<td>".$valor["trimestre"]."</td>";
                    echo "<td>".$valor["nota"]."</td>";
                    echo "<tr></tr>";
                }
            
            echo "</table>";
        }
        if(empty($_POST["alumno"])){
            $msgErrorAlumno= "<font color='red'>* Introduzca el nombre de un alumno. <br></font>";
            $vAlumno="";
        }

        if(empty($_POST["trimestre"])){
            $msgErrorTrimestre= "<font color='red'>* Introduzca el trimestre. <br></font>";
            $vTrimestre="";
        }

        if(empty($_POST["nota"])){
            $msgErrorNota= "<font color='red'>* Introduzca una nota. <br></font>";
            $vNota="";
        }

        if (isset($_POST["logout"])){
            session_unset();
            session_destroy();
            session_start();
            session_regenerate_id(true);
            header("Location:Ejercicio2.php");
        }
        
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
    <title>Ejercicio 2</title>
</head>
<body>
    <section>
        <?php

            echo "<h1>Gestión Académica</h1>";
            echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."\" method=\"post\">";
                echo "</br></br><input type=\"submit\" name=\"nuevaNota\" value=\"Nueva Nota\" ></button>";
                echo "  <input type=\"submit\" name=\"mostrar\" value=\"Mostrar Notas\" ></button>";
                echo "  <input type=\"submit\" name=\"logout\" value=\"Cerrar Sesion\" ></button>";
            echo "</form>";
            echo "</br>";

            control();

            echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a></br>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema2-Cookies_Sesiones/Sesiones/Ejercicio1.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>