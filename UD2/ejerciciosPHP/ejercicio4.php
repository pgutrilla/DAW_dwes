<?php

    define('NUMERO', 8);

    $strHTML = '<p>';

    for( $i = 0; $i<=10; $i++ ){
        $strHTML .= $i . ' x ' . NUMERO .' = ' . NUMERO  * $i . '<br>';    
    }
    $strHTML .= '</p>';
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
            <?php echo $strHTML;?>
        </body>
</html>