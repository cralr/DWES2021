<!--

    Ejercicio 5 Formularios: Test de verbos irregulares.

-->

<?php

    /* 
    do {$nAleatorio = rand (0,7)};
    while (in_array ($nAleatorio))

    */
    //Array de Verbos

    $arrayVerbos = array (
                              array("ser/estar",  "be",  "was/were",  "been"),

                              array("ganarle",  "beat",  "beat",  "beaten"),

                              array("empezar",  "begin",  "began",  "begun"),

                              array("doblar",  "bend",  "bent",  "bent"),

                              array("morder",  "bite",  "bit",  "bitten"),

                              array("soplar",  "blow",  "blew",  "blown"),

                              array("romper",  "break",  "broke",  "broken"),

                              array("llevar/traer",  "bring",  "brought",  "brought"),

                              array("contruir",  "build",  "built",  "built"),

                              array("comprar",  "buy",  "bought",  "bought"),

                              array("coger",  "catch",  "caught",  "caught"),

                              array("elegir",  "choose",  "chose",  "chosen"),

                              array("venir",  "come",  "came",  "come"),

                              array("costar",  "cost",  "cost",  "cost"),

                              array("hacer",  "do",  "did",  "done"),

                              array("dibujar",  "draw",  "drew",  "drawn"),

                              array("soñar",  "dream",  "dreamed/dreamt",  "dreamed/dreamt"),

                              array("conducir",  "drive",  "drove",  "driven"),

                              array("beber",  "drink",  "drank",  "drunk"),

                              array("comer",  "eat",  "ate",  "eaten"),

                              array("caer",  "fall",  "fell",  "fallen"),

                              array("sentir",  "feel",  "felt",  "felt"),

                              array("luchar",  "fight",  "fought",  "fought"),

                              array("encontrar",  "find",  "found",  "found"),

                              array("volar",  "fly",  "flew",  "flown"),

                              array("olvidar",  "forget",  "forgot",  "forgotten"),

                              array("perdonar",  "forgive",  "forgave",  "forgiven"),

                              array("conseguir",  "get",  "got",  "gotten"),

                              array("dar",  "give",  "gave",  "fiven"),

                              array("ir",  "go",  "went",  "gone"),

                              array("crecer",  "grow",  "grew",  "grown"),

                              array("tener",  "have",  "had",  "had"),

                              array("oir",  "hear",  "heard",  "heard"),

                              array( "esconder","hide","hid",     "hidden"),

                              array( "golpear","hit","hit","hit"),

                              array( "sujetar","hold","held","held"),

                              array( "doler / hacer daño","hurt","hurt","hurt"),

                              array( "guardar","keep","kept","kept"),

                              array( "saber","know","knew","known"),

                              array( "aprender","learn","learned,learnt","learned,learnt"),

                              array( "marcharse","leave","left","left"),

                              array( "prestar","lend","lent","lent"),

                              array( "permitir","let","let","let"),

                              array( "perder","lose","lost","lost"),

                              array( "hacer","make","made", "made"),

                              array( "significar","mean","meant","meant"),

                              array( "quedar","meet","met","met"),

                              array( "pagar","pay","paid","paid"),

                              array( "poner","put","put","put"),

                              array( "leer","read","read","read"),

                              array( "sonar","ring","rang","rung"),

                              array( "levantar","rise","rose","risen"),

                              array( "correr","run","ran","run"),

                              array( "decir","say","said","said"),

                              array( "ver","see","saw","seen"),

                              array( "vender","sell","sold","sold"),

                              array( "enviar","send","sent","sent"),

                              array( "mostrar","show","showed","showed/ shown"),

                              array( "enviar","send","sent","sent"),

                              array( "cerrar","shut","shut","shut"),

                              array( "cantar","sing","sang","sung"),

                              array( "sentarse","sit","sat","sat"),

                              array( "dormir","sleep","told","told"),

                              array( "hablar","speak","spoke","spoken"),

                              array( "gastar","spend","spent","spent"),

                              array( "estar de pie","stand","stood","stood"),

                              array( "nadar","swim","swam","swum"),

                              array( "tomar","take","took","taken"),

                              array( "enseñar","teach","taught","taught"),

                              array( "contar/ decir algo a alguien","tell","told","told"),

                              array( "pensar","think","thought","thought"),

                              array( "lanzar, arrojar","throw","threw","thrown"),

                              array( "entender","understand","understood","understood"),

                              array( "despertar","wake","woke", "woken"),

                              array( "llevar puesto/ ponerse","wear","wore","worn"),

                              array( "ganar","win","won","won"),

                              array( "escribir","write","wrote","written"),

    );      

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Miguel Cruz Álvarez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaginaInicio/css/style.css">
    <link rel="stylesheet" href="/PaginaInicio/css/normalize.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <header>
    </header>
    <section>
        <?php
            if(isset($_POST["enviar"])){
                $numeroVerbos = $_POST["num_verbos"];
                echo "<table border=1>";
                echo "<tr><th>Español</th><th>Presente</th><th>Pasado</th><th>Participio</th></tr>";
                    if($_POST["dificultad"][0]=="Basico"){
                        
                        
                    }
                    else if($_POST["dificultad"][0]=="Medio"){
                        echo "Medio";
                    }
                    else if($_POST["dificultad"][0]=="Dificil"){
                        echo "Dificil";
                    }
                echo "</table>";    
            }
            else{
                echo "<h1>Ejercicio 5: Test Verbos Irregulares</h1>";
                echo "<form action=\"Ejercicio5.php\" method=\"post\">";
                echo "<br/><br/>";  
                    echo "<label><p>Número de Verbos: </p><input type=\"number\" name=\"num_verbos\" value=\"\" min=\"1\" max=\"77\"></input></label></br>";
                    echo "<label >
                            <p>Dificultad:</p>
                                <select multiple name=\"dificultad[]\">
                                    <option value=\"Basico\">Básico</option>
                                    <option value=\"Medio\" >Medio</option>
                                    <option value=\"Dificil\">Dificil</option>
                                </select>
                        </label>";

                    echo "</br></br><input type=\"submit\" value=\"Enviar\" name=\"enviar\"></button>";
                    
                echo "</form>";
                echo "</br><a href=\"../../../index.php?page=dwes\"><button>Volver</button></a>";
                echo "</br><a href=\"https://github.com/cralr/DWES2021/blob/master/Tema1/EjemplosIniciales/Actividad2_5Formularios/Ejercicio5.php\"><button>Ver Código</button></a></br>";

            }
                
            
        ?>
    </section>  
</body>
</html>

