<?php
/**
 * Cookies
 * 3.Crea un formulario de login que permita al usuario recordar los datos introducidos. Incluye una opción para borrar la información almacenada.
 * 
 * @author Rafael Miguel Cruz Álvarez
 */


    $lProcesarFormulario="";
 
    //Comprobar si se ha pulsado el botón enviar y se pasa la función de limpiar datos a lo que se recibe por post
   
    if (isset($_POST["enviar"])){
        $lProcesarFormulario=true;
        $usuario=error($_POST['user']);
        $pass=error($_POST['pass']);
    }
  
    if (isset($_POST['recordar'])){
        if($_POST['recordar']==true){
            setcookie("user",$usuario,time()+3600);
            setcookie("pass",$pass,time()+3600);
        }
        else{
            setcookie("user",$usuario,time()-3600);
            setcookie("pass",$pass,time()-3600);
        }
    }

   //Al iniciar el index esta vacio el texto y cuando se encuentra la cookie guarda el valor en el value de los input

    $usuarioValorInicial = "";
    $passValorInicial = "";

    if (isset($_COOKIE['user'])){
        $usuarioValorInicial = $_COOKIE["user"];
    }
    if (isset($_COOKIE['pass'])){
        $passValorInicial = $_COOKIE['pass'];
    } 

    /**
     * Función de limpiar errores
     */
    function error($limpiar){
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
    <title>Ejercicio 3</title>
</head>
<body>
    <section>
        <?php
            if($lProcesarFormulario){
                echo "Usuario: ".$usuario."</br>";
                echo "Contraseña: ".$pass;
                echo "</br><a href=\"./Ejercicio3.php\"><button>Volver</button></a></br>";
            }
            else{
                echo "<h1>Formulario Cookies</h1>";
                echo "<form action=\"Ejercicio3.php\" method=\"post\">";
                    echo "<label><p>Usuario: </p><input type=\"text\" name=\"user\" value=\"$usuarioValorInicial\"></input></label></br>";
                    echo "<label><p>Contraseña: </p><input type=\"text\" name=\"pass\" value=\"$passValorInicial\"></input></label></br>";
                    echo "<label></br>Recordar: <input type=\"checkbox\" name=\"recordar\" ></input></label></br>";
                    echo "</br><input type=\"submit\" value=\"Enviar\" name=\"enviar\"></button>";
                echo "</form>";
                echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a></br>";
                echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema2-Cookies_Sesiones/Cookies/Ejercicio3.php\"><button>Ver Código</button></a></br>";
    
            }
        ?>
    </section>  
</body>
</html>