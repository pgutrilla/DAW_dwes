<?php

    function fibonacci( $uno, $dos, $nVeces){
        if ( $nVeces <= 10 ) {

            $total = $uno + $dos;
            $nVeces++;
            echo $total . '<br>';
            fibonacci( $dos, $total, $nVeces );
        }
    }

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1 cambio web</title>
    <style type="text/css" media="screen">
    </style>
    </head>
        <body>
            <?php fibonacci(0, 1, 0);?>
        </body>
</html>