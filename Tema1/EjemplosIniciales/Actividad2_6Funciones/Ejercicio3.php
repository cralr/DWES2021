
<!-- Ejercicio 3 Funciones.
    3. Supongamos el siguiente array

        $aUsuarios = array

            array 'nombre'=>'Jesús','apellido1'=>'Martínez','apellido2'=>'García',

            array 'nombre'=>'Mercedes','apellido1'=>'Calamaro','apellido2'=>'Pedrajas',

            array 'nombre'=>'Elena','apellido1'=>'Pérez','apellido2'=>'',;

        Crea un script que utilice una función anónima para generar los nombres de usuarios. 
        El nombre de usuario se forma concatenando las dos primeras letras del primer apellido, 
        las dos primeras letras del segundo apellido y la inicial del nombre.
-->

<?php

    $aUsuarios = array(

        array('nombre'=>'Jesús','apellido1'=>'Martínez','apellido2'=>'García'),

        array('nombre'=>'Mercedes','apellido1'=>'Calamaro','apellido2'=>'Pedrajas'),

        array('nombre'=>'Elena','apellido1'=>'Pérez','apellido2'=>'Córdoba'),

    );

     /**
     * Función para normalizar una cadena 
     * @param cadena 
     * @return cadena con formato utf8
     */
    function normaliza($cadena){
        $originales = "ÁáÉéÍíÓóÚúñ";
        $modificadas = "aaeeiioouun";
        $cadena = utf8_decode($cadena);
        $cadena = strtr ($cadena, utf8_decode($originales),$modificadas);
        $cadena = $cadena = strtolower($cadena);
        return utf8_encode($cadena);
    }

    /**
     * Función anónima que genera los usuarios a partir de un array de nombres y apellidos.
     */

   /*  $usuarios = function($aUsuarios){
        foreach($aUsuarios as $claveUsuarios => $valorUsuarios){        
            echo substr(normaliza(strtolower($valorUsuarios["apellido1"])),0,2).substr(normaliza(strtolower($valorUsuarios["apellido2"])),0,2).substr(normaliza(strtolower($valorUsuarios["nombre"])),0,2)."</br>";
            }
    } */

    //Usando array_map
    $usuarios = array_map(function($user){
        return substr(normaliza(strtolower($user["apellido1"])),0,2).substr(normaliza(strtolower($user["apellido2"])),0,2).substr(normaliza(strtolower($user["nombre"])),0,2)."</br>";
    },$aUsuarios);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaginaInicio/css/style.css">
    <link rel="stylesheet" href="/PaginaInicio/css/normalize.css">
    <title>Ejercicio 3</title>
</head>
<body>
    <section>
        <?php
    
            echo "<h1>Nombres de usuarios</h1>";
            echo "Los usuarios obtenidos son: </br></br>";
            foreach($usuarios as $valorUsuarios){
                echo $valorUsuarios;
                
            }
            echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_6Funciones/Ejercicio3.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>