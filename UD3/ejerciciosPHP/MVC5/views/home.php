<?php

    $bgColor = '';

    if( $this->color != '' ) {
        $bgColor = $this->color; 
    } 


    $strHTML = '<!DOCTYPE html>
                <html>
                    <head>
                        <meta charset="UTF-8">
                        <title>HOME</title>
                    </head>

                    <body style="background-color: ' . $bgColor . ';">
                        <h2>Home</h2>
                        <p>BIENVENIDO A MI PÁGINA HOME</p>        
                    </body>
                </html>';

    echo $strHTML;

?>