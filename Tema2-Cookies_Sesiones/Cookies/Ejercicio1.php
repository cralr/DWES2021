<?php
/**
 * Cookies
 * 1.Escriba una página que permita crear una cookie de duración limitada, comprobar el estado de la cookie y destruirla.
 * 
 * @author Rafael Miguel Cruz Álvarez
 */
    
    $cookie = "cookie";

    echo "<h1>Ejercicio 1</h1>";
    echo "<form action=\"Ejercicio1.php\" method=\"post\">";
        echo "<button name=\"crear\">Crear cookie</button></p>";
        echo "<button name=\"estado\">Estado cookie</button></p>";
        echo "<button name=\"borrar\">Borrar cookie</button></p>";
    echo "</form>";

    if (isset($_POST["crear"])) {
        setcookie($cookie, "Cookie", time()+3600); 
    }else if (isset($_POST["estado"])){
        if (!isset($_COOKIE[$cookie])){
            echo "No existe la cookie.</br>";
        }else{
            echo "Existe la cookie.</br>";
        }
    }else if (isset($_POST["borrar"])) {
        setcookie($cookie, "", time()-3600);
        echo 'Cookie borrada con Éxito.<br>';
    }

    
    echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a></br>";
    echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema2-Cookies_Sesiones/Cookies/Ejercicio1.php\"><button>Ver Código</button></a></br>";

?>


