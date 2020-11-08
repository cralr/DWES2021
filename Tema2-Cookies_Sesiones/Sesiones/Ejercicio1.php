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

if (!isset($_SESSION["agenda"])){
   $_SESSION["agenda"] = array();
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
            echo "<form action=\"Ejercicio1.php\" method=\"post\">";
                //echo "<label><p>Buscar: </p><input type=\"text\" name=\"buscar\" value=\"\"></input></label></br>";
                echo "</br></br><input type=\"submit\" name=\"nuevoContacto\" value=\"Nuevo Contacto\" ></button>";
                echo "  <input type=\"submit\" name=\"mostrar\" value=\"Mostrar Contactos\" ></button>";
                echo "  <input type=\"submit\" name=\"logout\" value=\"CerrarSesion\" ></button>";
            echo "</form>";
            echo "</br>";

            if(isset($_POST["nuevoContacto"])){
                echo "<form action=\"Ejercicio1.php\" method=\"post\">";
                    echo "<label><p>Nombre: </p><input type=\"text\" name=\"nombre\" value=\"\"></input></label></br>";
                    echo "<label><p>Teléfono: </p><input type=\"text\" name=\"telefono\" value=\"\"></input></label></br>";
                    echo "</br></br><input type=\"submit\" name=\"annadirContacto\" value=\"Añadir Contacto\" ></button>";
                echo "</form>";
            }
            
            if(isset($_POST["annadirContacto"])){
                $arrayContacto = array("nombre" => $_POST["nombre"], "telefono" => $_POST["telefono"]);
                array_push($_SESSION["agenda"],$arrayContacto);
                echo "Se ha añadido un nuevo contacto.";
            }

            if (isset($_POST["mostrar"])){
                echo "<table border=1>";
                echo "<tr><th>Nombre</th><th>Teléfono</th></tr>";
                foreach($_SESSION["agenda"] as $valor){
                    echo "<td>".$valor["nombre"]."</td>";
                    echo "<td>".$valor["telefono"]."</td>";
                    echo "<tr></tr>";
                }
                echo "</table>";
            }

            if (isset($_POST["logout"])){
                session_unset();
                session_destroy();
                session_start();
                session_regenerate_id(true);
                header("Location:Ejercicio1.php");
            }


            echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a></br>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema2-Cookies_Sesiones/Sesiones/Ejercicio1.php\"><button>Ver Código</button></a></br>";

        





           
        ?>
    </section>  
</body>
</html>