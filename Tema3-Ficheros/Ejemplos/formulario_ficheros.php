<?php

/**
 * Formulario ficheros para añadir una imagen y luego mostrar todas las imagenes
 * 
 * 
 * @author Rafael Miguel Cruz Álvarez
 */
if (isset($_POST["enviar"])) {
    //print_r($_FILES);
    echo "<br>";
    $allowedExts = array("gif", "jpeg", "jpg", "png", "PNG");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    if ((($_FILES["file"]["type"] == "image/gif")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/jpg")
            || ($_FILES["file"]["type"] == "image/pjpeg")
            || ($_FILES["file"]["type"] == "image/x-png")
            || ($_FILES["file"]["type"] == "image/png"))
        && ($_FILES["file"]["size"] < 2000000)
        && in_array($extension, $allowedExts)
    ) {
        if ($_FILES["file"]["error"] > 0) {
            echo "Error: " . $_FILES["file"]["error"] . "<br/>";
        } else {
           /*  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            echo "Type: " . $_FILES["file"]["type"] . "<br>";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            echo "Stored in: " . $_FILES["file"]["tmp_name"]; */

            if (file_exists("upload/" . $_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " ya existe. ";
            } else {
                move_uploaded_file(
                    $_FILES["file"]["tmp_name"],
                    "upload/" . date("HmsdmY")."_".$_FILES["file"]["name"]
                );
                echo "<br>Guardado en: " . "upload/" . $_FILES["file"]["name"];
            }
        }
    } else {
        echo "Fichero no válido.";
    }

    
}
   

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaginaInicio/css/style.css">
    <link rel="stylesheet" href="/PaginaInicio/css/normalize.css">
    <title>Ejemplo formulario fichero</title>
</head>

<body>
    <form action="formulario_ficheros.php" method="POST" enctype="multipart/form-data">
        <label for="file">Nombre Fichero:</label>
        <input type="file" name="file" id="file>"></br>
        <input type="submit" name="enviar" value="Enviar"></br>
    </form>


    <?php

        echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema3-Ficheros/Ejemplos/formulario_ficheros.php\"><button>Ver Código</button></a></br>";

        echo "<h3>Imagenes Guardadas</h3>";
        $imagenes = scandir("upload");
        echo "<table border=\"1px solid black\">";
        for($i=0;$i<count($imagenes);$i++){
            if((strpos($imagenes[$i],"png") !== false) || (strpos($imagenes[$i],"jpeg") !== false) || (strpos($imagenes[$i],"jpg") !== false) || (strpos($imagenes[$i],"gif") !== false)){
                echo "<td><img src=\"upload/".$imagenes[$i]."\" width=\"300px\"><br></td>";
            }  
        }
        echo "</table>";
    ?>

</body>

</html>