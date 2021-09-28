<?php

    define('NUMERO', 162);

    function divisores( $numero ){

        $contador = 0;
        $strResult = '';

        for( $i = 1; $i <= $numero; $i++ ){

            if( $numero%$i == 0 ){
                $strResult .=  $i . '<br>';
                $contador++;
            } 
        }

        if( $contador == 2 ) {
            $strResult = "El numero es primo";
        }

        return $strResult;
    }

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css" media="screen">
    </style>
    </head>
        <body>
            <h1>Divisores de <?php echo NUMERO; ?></h1>
            <?php echo divisores( NUMERO );?>
        </body>
</html>