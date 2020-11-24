
<!--

    Ejercicio 2 - Sumar los 3 primeros números pares.

-->



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaginaInicio/css/style.css">
    <link rel="stylesheet" href="/PaginaInicio/css/normalize.css">
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
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_3-FOR/Ejercicio2.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>