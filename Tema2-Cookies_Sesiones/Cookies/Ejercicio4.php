<?php
/**
 * Cookies
 * 4. Incluir en vuestro servidor un contador que indique al usuario el número de veces que ha accedido al sitio.
 * 
 * @author Rafael Miguel Cruz Álvarez
 */

    echo "<h1>Ejercicio 4</h1>";
    if(!isset($_COOKIE['accesos'])){
        setcookie('accesos',1,time()+3600);
        $mensaje = "Buenas, a accedido a mi sítio web.</br>";
    }else{
        setcookie('accesos',++$_COOKIE['accesos'],time()+3600);
        $mensaje = "Has accedido ".$_COOKIE['accesos']." vez/es a mi sítio web.</br>";
    }

    echo $mensaje;

    
    echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a></br>";
    echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema2-Cookies_Sesiones/Cookies/Ejercicio4.php\"><button>Ver Código</button></a></br>";

?>

