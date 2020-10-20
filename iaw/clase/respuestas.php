<?php

    /*print "<pre>";
    print_r($_POST);
    print "</pre>";*/
    //trim es para quitar espacio al principio y al final del texto
    $nombre = trim($_POST['nombre']);

    if ($nombre == ""){
        print "no has introducido un nombre";
    }
    else{
        PRINT "EL NOMBRE ES: $_POST[nombre]";
    }
        print "El NOMBRE ES: $_POST[nombre]";


//si ha llegado un elemento aceptado en el REQUEST
    if(isset($_REQUEST["aceptar"])){ //
        print "has aceptado las condiciones";
    }

    if($_REQUEST["aceptar"] == "ON"){
        PRINT "HAS ACEPTADO LAS CONDICIONES";
        }

    else{
        print "no has aceptado las condiciones";
    }

    if (isset($_REQUEST["ciclos"])) {
        $ciclo = $_REQUEST["ciclos"];
        if ($ciclo =="DAW") {
            print "vas a hacer paginas web";
        } elseif ($ciclo == "DAM") {
            print "vas a crear un juego para Android";
        }

        if (isset($_RESQUEST["intereses2"])) {
        }

        print "tiene intereses";

        $intereses = $_RESQUEST["intereses2"];
        foreach ($intereses2 as $intereses) {
            print "<P><Estas interesado en $interes.</p>";
        }
    }

    else{

        print "no tiene intereses.";
    }



    
?>