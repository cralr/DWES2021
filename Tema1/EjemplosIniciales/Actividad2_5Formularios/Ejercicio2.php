
<!-- Ejercicio 2 Formularios.
    Formulario para un currículum que incluya: Campos de texto, grupo de botones de opc ión,
    casilla de verificación, lista de selección única, lista de selección múltiple, botón de validación,
    botón de imagen, botón de reset.
-->

<?php

    //Variables
    $nombre;
    $apellidos;
    $correo;
    $genero=array("Hombre","Mujer","Otro");
    $idiomas=array("Español","Ingles","Frances");
    $vehiculos = array("Renault","Mercedes","Citroen","Volvo");
    $selected="";
    $opiniones;
    $url;
    $checkedHombre="";
    $checkedMujer="";
    $checkedOtro="";
    $checkedMarca1="";
    $checkedMarca2="";
    $checkedMarca3="";
    $checkedMarca4="";
    $checkedIdioma1="";
    $checkedIdioma2="";
    $checkedIdioma3="";


    $msgErrorNombre;
    $msgErrorApellidos;
    $msgErrorCorreo;
    $msgErrorGenero;
    $msgErrorIdiomas;
    $msgErrorVehiculos;
    $msgErrorOpiniones;
    $msgErrorUrl;
    
    //Validar Formulario
    $lProcesarFormulario;

    if (isset($_POST["enviar"])){
        $lProcesarFormulario=true;
        $nombre=limpiarDatos($_POST["nombre"]);
        $apellidos=limpiarDatos($_POST["apellidos"]);
        $correo=limpiarDatos($_POST["correo"]); 
        $opiniones = limpiarDatos($_POST["opiniones"]);
        $url=limpiarDatos($_POST["url"]);
    }
    if(empty($_POST["nombre"])){
        $msgErrorNombre = "<font color='red'>* Introduzca un nombre. <br></font>";
        $lProcesarFormulario=false;
        $nombre="";
    }

    if(empty($_POST["apellidos"])){
        $msgErrorApellidos = "<font color='red'>* Introduzca los Apellidos. <br></font>";
        $lProcesarFormulario=false;
        $apellidos="";
    }

    if(empty($_POST["correo"])){
        $msgErrorCorreo = "<font color='red'>* Introduzca un Correo. <br></font>";
        $lProcesarFormulario=false;
        $correo="";
    }

    if(empty($_POST["genero"])){
        $msgErrorGenero = "<font color='red'>* Debe de elegir una Opción. <br></font>";
        $lProcesarFormulario=false;
        //$genero="";
    }else{
        foreach($_POST["genero"] as $value){
            if($value == "Hombre")
                $checkedHombre = 'checked';
        
            else if($value == "Mujer")
                $checkedMujer = 'checked';
         
            else if($value == "Otro")
                $checkedOtro = 'checked';
        }
    }

    if(empty($_POST["idiomas"])){
        $msgErrorIdiomas = "<font color='red'>* Debe de elegir un idioma como mínimo. <br></font>";
        $lProcesarFormulario=false;
        //$idiomas="";
    }
    else{
        foreach($_POST["idiomas"] as $value){
            if($value == "Español")
                $checkedIdioma1 = 'checked';
        
            else if($value == "Ingles")
                $checkedIdioma2 = 'checked';
         
            else if($value == "Frances")
                $checkedIdioma3 = 'checked';
        }
    }
    
    if(empty($_POST["vehiculos"])){
        $msgErrorVehiculos = "<font color='red'>* Debe de elegir una marca de vehículo como mínimo. <br></font>";
        $lProcesarFormulario=false;
        //$vehiculos="";
    }else{
        foreach($_POST["vehiculos"] as $value){
            if($value == "Renault")
                $checkedMarca1="selected";
        
            else if($value == "Mercedes")
                $checkedMarca2="selected";
         
            else if($value == "Citroen")
                $checkedMarca3="selected";

            else if($value == "Volvo")
                $checkedMarca4="selected";
        }

    }

    if(empty($_POST["opiniones"])){
        $msgErrorOpiniones = "<font color='red'>* Tamaño Máximo de 10 caracteres. <br></font>";
        $lProcesarFormulario=false;
        $opiniones="";
    }

    if(empty($_POST["url"])){
        $msgErrorUrl = "<font color='red'>* Debe de escribir una URL correcta. <br></font>";
        $lProcesarFormulario=false;
        $url="";
    }

    /**
     * Función para limpiar la entrada de datos
     * @param limpiar
     */
    function limpiarDatos($limpiar){
        $error = trim($limpiar);
        $error = stripslashes($limpiar);
        $error =  htmlspecialchars($limpiar);
        return $error;
    }
    

   
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Ejercicio 2</title>
</head>
<body>
    <section>
        <?php
            if($lProcesarFormulario){
                echo "<h1>Ejercicio2: Curriculum</h1>";
                echo "Los datos son: </br>";
                echo "<b>Nombre: </b>".$nombre."</br>";
                echo "<b>Apellidos: </b>".$apellidos."</br>";
                echo "<b>Correo: </b>".$correo."</br>";
                echo "<b>Género: </b>";
                foreach($_POST["genero"] as $seleccionado)
                    echo $seleccionado." ";
                echo "</br><b>Idiomas: </b>";
                foreach($_POST["idiomas"] as $seleccionado)
                    echo $seleccionado." ";
                echo "</br><b>Marca de Coches: </b>";
                foreach($_POST["vehiculos"] as $seleccionado)
                    echo $seleccionado." ";
                echo "</br><b>Opiniones: </b>".$opiniones."</br>";
                echo "<b>URL: </b>".$url."</br>";
            }
            else{
                echo "<h1>Ejercicio2: Curriculum</h1>";
                echo "<form action='Ejercicio2.php' method=\"post\">";
                echo "<br/><br/>";  
                    echo "<label >Nombre: <input type='text' name='nombre' value='$nombre'></input></label>";
                    if (empty($_POST["nombre"]))
                        echo $msgErrorNombre."</br>";
                    else{
                        echo "</br>";
                    }
                    echo "<label >Apellidos: <input type='text' name='apellidos' value='$apellidos'></input></label>";
                    if (empty($_POST["apellidos"]))
                        echo $msgErrorApellidos."</br>";
                    else{
                        echo "</br>";
                    }
                    echo "<label >Correo: <input type='email' name='correo' value='$correo' placeholder='ejemplo@ejemplo'></input></label>";
                    if (empty($_POST["correo"]))    
                        echo $msgErrorCorreo."</br>";
                    else{
                        echo "</br>";
                    }
                    echo "<label >Género:";
                            echo "<input type='radio' name='genero[]' value='Hombre' $checkedHombre >Hombre";
                            echo "<input type='radio' name='genero[]' value='Mujer'$checkedMujer >Mujer";
                            echo "<input type='radio' name='genero[]' value='Otro' $checkedOtro >Otro";

                        echo"</label>";
                    if (empty($_POST["genero"]))    
                         echo $msgErrorGenero."</br>";
                    else{
                        echo "</br>";
                    }
                    echo "<label >
                         Idiomas:
                                 <input type='checkbox' name='idiomas[]' value='Español' $checkedIdioma1 >Español</input>
                                 <input type='checkbox' name='idiomas[]' value='Ingles' $checkedIdioma2 >Ingles</input>
                                 <input type='checkbox' name='idiomas[]' value='Frances' $checkedIdioma3 >Frances</input>
                    </label>";
                    if (empty($_POST["idiomas"]))    
                        echo $msgErrorIdiomas."</br>";
                    else{
                        echo "</br>";
                    }
                    echo "<label >
                        Vehículos:
                            <select multiple name='vehiculos[]'>
                                <option value='Renault'$checkedMarca1 >Renault</option>
                                <option value='Mercedes' $checkedMarca2>Mercedes</option>
                                <option value='Citroen' $checkedMarca3>Citroen</option>
                                <option value='Volvo' $checkedMarca4>Volvo</option>
                            </select>
                    </label>";
                   if (empty($_POST["vehiculos"]))    
                       echo $msgErrorVehiculos."</br>";
                    else{
                        echo "</br>";
                    }
                    echo "<label >
                       Opiniones:
                           <textarea name='opiniones' cols='40' rows='5' maxlength='10' value='$opiniones'></textarea>
                   </label>";
                   if (empty($_POST["opiniones"]))    
                       echo $msgErrorOpiniones."</br>";
                    else{
                        echo "</br>";
                    }
                    echo "<label >
                       URL:
                           <input type='url' name='url' pattern='.+\.com' placeholder='http://ejemplo.com'></input>
                    </label>";
                    if (empty($_POST["url"]))    
                       echo $msgErrorUrl."</br>";
                    else{
                        echo "</br>";
                    }
                    echo "<input type='submit' value='Enviar' name='enviar'></button>";
                echo "</form>";
            }

        ?>
    </section>  
</body>
</html>