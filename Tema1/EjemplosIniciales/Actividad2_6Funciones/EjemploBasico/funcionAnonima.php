<?php
/**
 * Ejemplo función anónima Crea un script que defina un array de números enteros y utilizando una función anónima genere un
 * array con el cuadrado de los mismos.
 */



    $numeros = array("2","7","3");

    /**
     * Función anónima para realizar el cuadrado de un número usando array_map
     * @param num número para realizar su cuadrado
     * @return num*num devuelve el cuadrado de un número
     */
    
    $cuadrado = array_map(function($num){
        return $num * $num;
    },$numeros);
    
    print_r($cuadrado);
    echo "</br>";
    foreach($cuadrado as $valorCuadrado){
        echo $valorCuadrado;
        echo "</br>";
    }
 
/* 
    Forma 2:
    function cuadrado($num){
        return $num * $num;
    }

    $total = array_map("cuadrado",$numeros);

    print_r($total); */



?>