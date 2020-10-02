
<!--

    Ejercicio 2 - Sumar los 3 primeros números pares.

-->



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <header>
        <h1>Ejercicio 2</h1>
    </header>
    <section>
        <?php
            echo "<p><b>Suma de los 3 primeros números pares:</b></p>";

            $suma = 0;
            
            for ($i=2; $i < 7; $i++) { 
                if ($i%2==0) {
                    $suma += $i;
                }
            }

            echo "La suma es $suma";
        
        ?>
    </section>  
</body>
</html>