
<!--
    Ejercicio 5 - Escribir un script que declare una variable y muestre la siguiente información en pantalla:
    Valor actual 8.
    Suma 2. Valor ahora 10.
    Resta 4. Valor ahora 6.
    Multipica por 5. Valor ahora 30.
    Divide por 3. Valor ahora 10.
    Incrementa el valor en 1. Valor ahora 11.
    Decrementa el valor en 1. Valor ahora 10.
-->

<?php
    $x = 8;
    $suma = $x+2;
    $resta = $suma-4;
    $mult = $resta * 5;
    $dividir = $mult / 3;
    $incremento = ++$dividir;
    $decremento = --$dividir;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <header>
        <h1>Ejercicio 5</h1>
    </header>
    <section>
        <?php
            echo "<p>Valor actual es: ".$x."</p>";  
            echo "<p>Suma 2. Valor ahora es ".$suma."</p>"; 
            echo "<p>Resta 4. Valor ahora es ".$resta."</p>"; 
            echo "<p>Multiplica por 5. Valor ahora es ".$mult."</p>"; 
            echo "<p>Divide por 3. Valor ahora es ".$dividir."</p>"; 
            echo "<p>Incrementa el valor en 1. Valor ahora es ".$incremento."</p>"; 
            echo "<p>Decrementa el valor en 1. Valor ahora es ".$decremento."</p>";
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
        ?>
    </section>  
</body>
</html>