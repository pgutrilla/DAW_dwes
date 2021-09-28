<?php

    $arrJugadores      = [];    
    $arrJugadores[]      = 'Kevin Durant';
    $arrJugadores[]      = 'Kobe Bryant';
    $arrJugadores[]      = 'Pau Gasol';
    $arrJugadores[]      = 'Mark Gasol';
    $arrJugadores[]      = 'Stephen Curry';

    $arrJugadoresClave = [];
    $arrJugadoresClave['22'] = 'Kevin Durant'; 
    $arrJugadoresClave['25'] ='Kobe Bryant'; 
    $arrJugadoresClave['35'] = 'Pau Gasol'; 
    $arrJugadoresClave['54'] = 'Mark Gasol'; 
    $arrJugadoresClave['30'] = 'Stephen Curry';

    function table_valor( $arrJugadores ){

        $strHTML = '';
        $strRowJugadores = '';

        foreach( $arrJugadores as $jugador ){
            $strRowJugadores .= '<td>' . $jugador . '</td>';
        }

        $strHTML .= '<table>
                        <tr>
                            <td colspan="5">Jugadores</td>
                        </tr>
                        <tr>
                            ' . $strRowJugadores . '
                        </tr>
                    </table>';

        return $strHTML;            
    }

    function table_clave_valor( $arrJugadores ){

        $strHTML = '';
        $strRowClaves = '';
        $strRowJugadores = '';

        foreach( $arrJugadores as $clave => $jugador ){
            $strRowClaves .= '<td>' . $clave . '</td>';
            $strRowJugadores .= '<td>' . $jugador . '</td>';
        }

        $strHTML .= '<table>
                        <tr>
                            ' . $strRowClaves . '
                        </tr>
                        <tr>
                            ' . $strRowJugadores . '
                        </tr>
                    </table>';

        return $strHTML;
    }
    
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css" media="screen">
    table,th,td{
        border: 2px black solid;
        margin: 0;
        padding: 0;
        text-align: center;
    }
</style>
    </head>
        <body>
            <h1>Tabla equipo basket</h1>
            <?php echo table_valor( $arrJugadores );?>
            <br><br>
            <?php echo table_clave_valor( $arrJugadoresClave );?>
        </body>
</html>