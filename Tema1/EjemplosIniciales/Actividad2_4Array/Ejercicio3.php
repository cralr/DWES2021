
<!--

    Ejercicio 3 Array: Nota de los alumnos de 2º DAW para el módulo DWES.

-->

<?php

    //Array de meses

    $arrayAlumnos = array (
                            array("nombre"=> array( "Rafael Cruz "=>5)),
                            array("nombre"=> array( "Miguel Carmona" =>7)),
                            array("nombre"=> array( "Manuel Perez" =>3)),
                            
    );


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 3</title>
</head>
<body>
    <header>
        <h1>Ejercicio 3: Notas Alumnos</h1>
    </header>
    <section>
        <?php
            echo "Notas de los Alumnos en DWES.</br>";
            echo "<table border=1>";
            echo "<tr><th>Alumno</th><th>Nota</th></tr>";
            foreach ($arrayAlumnos as $valorAlumnos) {
                foreach($valorAlumnos["nombre"] as $alumnos =>$notas){
                    echo "<td>".$alumnos."</td>";
                    echo "<td>".$notas."</td>";
                    echo "<tr></tr>"; 
                }

            } 
            echo "</table>"; 
            echo "<a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";    
            echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_4Array/Ejercicio3.php\"><button>Ver Código</button></a></br>";

        ?>
    </section>  
</body>
</html>