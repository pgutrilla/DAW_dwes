<?php

    $strHTML = '';
    
    // $operando1 = $_POST['operando1'];
    // $operando2 = $_POST['operando2'];

    // echo $operando1;
    // echo $operando2;

    $solucion = '';

    if( !empty($_POST['operando1']) && !empty($_POST['operando2']) && !empty($_POST['operador']) ) {

        $operando1 = intval($_POST['operando1']);
        $operando2 = intval($_POST['operando2']);

        $operador = $_POST['operador'];

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

        $strHTML .= 'La solución es: ' . $solucion;

    } else {
        $strHTML .= '<form method="POST" action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'">    
                        
                        <label>1 - ¿Cual es mi fruta favorita? </label>
                        <select name="pregunta1">
                            <optgroup label="Operadores">
                                <option selected>*</option>
                                <option>/</option>
                                <option>-</option>
                                <option >+</option>
                            </optgroup>
                        </select>
                        
                        <label>Pregunta 1</label>
                        <select name="pregunta1">
                            <optgroup label="Operadores">
                                <option selected>*</option>
                                <option>/</option>
                                <option>-</option>
                                <option >+</option>
                            </optgroup>
                        </select>

                        <label>Pregunta 1</label>
                        <select name="pregunta1">
                            <optgroup label="Operadores">
                                <option selected>*</option>
                                <option>/</option>
                                <option>-</option>
                                <option >+</option>
                            </optgroup>
                        </select>

                        <label>Pregunta 1</label>
                        <select name="pregunta1">
                            <optgroup label="Operadores">
                                <option selected>*</option>
                                <option>/</option>
                                <option>-</option>
                                <option >+</option>
                            </optgroup>
                        </select>

                        <label>Pregunta 1</label>
                        <select name="pregunta1">
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