<?php

// $a = 5;
// $b = 3;
// $c = 1;

$a = -3;
$b = 5;
$c = 8;

function o_segundo_grado( $a, $b , $c ){
    
    $arrResultado = [];
    
    $raiz = sqrt( ($b * $b) - ( 4 * $a * $c ) );

    // echo $raiz; 
    // echo is_nan( $raiz );

    $Positiva = ( ($b * -1) + $raiz ) / ( 2 * $a );
    $Negativa = ( ($b * -1) - $raiz ) / ( 2 * $a );

    if ( is_nan($Positiva) || is_nan($Negativa) ) {

        return 'No tiene solución';

    } else {
        
        $arrResultado[] = $Positiva;
        $arrResultado[] = $Negativa;

        return $arrResultado;   
    }
}



// echo o_segundo_grado( $a, $b, $c ); 
print_r(o_segundo_grado( $a, $b, $c )); 

 ?>
