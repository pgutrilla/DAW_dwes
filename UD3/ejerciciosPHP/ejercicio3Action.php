<?php

    if(isset($_POST) && !empty($_POST)){
        $nombre = $_POST['nombre'];

        $lenNombre = strlen($nombre);

        // echo $lenNombre;

        if( $nombre != '' && $lenNombre > 3 ){

            echo "Bienvenido $_POST[nombre]";

        } else {

            // if( $nombre != ''){}

            header('Location:ejercicio3.php?input=' . $nombre);
        }
        
    } 
    ?>