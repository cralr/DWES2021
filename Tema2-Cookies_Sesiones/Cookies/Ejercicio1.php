<?php
/**
 * Cookies
 * 1.Escriba una página que permita crear una cookie de duración limitada, comprobar el estado de la cookie y destruirla.
 * 
 * @author Rafael Miguel Cruz Álvarez
 */
    
    if(isset($_COOKIE['user'])){
        echo "La cookie guarda lo siguiente: ".$_COOKIE['user'];
        //setcookie('user', '', time()-3600);
        
    }else{
        setcookie('user','Rafa',time()+3600);
    }

    echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a></br>";
?>


