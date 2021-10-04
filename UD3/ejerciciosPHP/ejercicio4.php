<?php

    $strHTML = '';

    $operando1 = intval($_POST['operando1']);
    $operando2 = intval($_POST['operando2']);

    $operador = $_POST['operador'];

    $solucion = '';

    if( $operando1 != null && $operando1 != null ) {

        switch($operador){
            case '*':
                $solucion = $operando1 * $operando2;
                break;

            case '/':
                $solucion = $operando1 / $operando2;
                break;    

            case '+':
                $solucion = $operando1 + $operando2;
                break;    

            case '-':
                $solucion = $operando1 - $operando2;
                break;    

        }

        $strHTML .= 'La solución es:' . $solucion;

    } else {
        $strHTML .= '<form method="POST" action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'">
                        <label>Operador 1</label><input type="number" value="" name="operando1"> <br>
                        <label>Operador 2</label><input type="number" value="" name="operando2"> <br>
                        <select name="operador">
                            <optgroup label="Operadores">
                                <option selected>*</option>
                                <option>/</option>
                                <option>-</option>
                                <option >+</option>
                            </optgroup>
                        </select>
                        <input type="submit" value="enviar">
                    </form>';
        }
    
    ?>

<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Formulario y procesamiento en un fichero</title>
</head><body>
    <h2>Formulario</h2>
    
    <?php echo $strHTML; ?>
    
</body></html>