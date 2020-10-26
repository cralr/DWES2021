
<!--

    Ejercicio 1 - Escribir los números 1 al 10.

-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <header>
        <h1>Ejercicio 1</h1>
    </header>
    <section>
        <?php
            echo "<p><b>Números del 1 al 10.</b></p>";
            for ($i=1; $i < 11; $i++) { 
                echo $i.' ';
            }
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
        ?>
    </section>  
</body>
</html>