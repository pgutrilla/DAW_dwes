<?php

    if(isset($_POST)){
        $nombres = $_POST['nombre'];
        $nNombre = count($nombres);
        
        if( $nNombre > 0 ){
            var_dump($nombres);
        } else {
            include('ejercicio5.php');
        }

    } 
?>