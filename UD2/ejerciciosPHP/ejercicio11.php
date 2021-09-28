<?php

    $arrPaises = [

        'España' => [
            'moneda' => 'euro',
            'numero_habitantes' => '1000000',
        ],

        'Polonia' => [
            'moneda' => 'sloty',
            'numero_habitantes' => '2000000',
        ],

        'Rusia' => [
            'moneda' => 'rupias',
            'numero_habitantes' => '3000000',
        ],

        'Inglaterra' => [
            'moneda' => 'libras',
            'numero_habitantes' => '4000000',
        ],
    ];    
    
    
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
            <h1>Paises</h1>
            <pre>
            <?php print_r( $arrPaises );?>
            </pre>
        </body>
</html>