<?php

    $strHTML = '';
    $solucion = '';

    if( !empty($_POST['pregunta1']) && !empty($_POST['pregunta2']) && !empty($_POST['pregunta3']) && !empty($_POST['pregunta4']) && !empty($_POST['pregunta5']) ) {

        $pregunta1 = intval($_POST['pregunta1']);
        $pregunta2 = intval($_POST['pregunta2']);
        $pregunta1 = intval($_POST['pregunta3']);
        $pregunta2 = intval($_POST['pregunta4']);
        $pregunta1 = intval($_POST['pregunta5']);

        switch($operador){
            case '*':
                $solucion = $pregunta1 * $pregunta2;
                break;

            case '/':
                $solucion = $pregunta1 / $pregunta2;
                break;    

            case '+':
                $solucion = $pregunta1 + $pregunta2;
                break;    

            case '-':
                $solucion = $pregunta1 - $pregunta2;
                break;    

        }

        $strHTML .= 'La solución es: ' . $solucion;

    } else {
        $strHTML .= '<form method="POST" action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'">    
                        
                        <label>1 - ¿Cual es mi fruta favorita? </label>
                            <input type="radio" name="pregunta1" value=1>Pera</input>
                            <input type="radio" name="pregunta1" value=2>Melón</input>
                            <input type="radio" name="pregunta1" value=3>Sandia</input>
                            <input type="radio" name="pregunta1" value=4>Fresas</input>
                        <br><br>
                        
                        <label>2 - ¿Cual es mi colo favorito? </label>
                            <input type="radio" name="pregunta2" value=1>Verde</input>
                            <input type="radio" name="pregunta2" value=2>Cyan</input>
                            <input type="radio" name="pregunta2" value=3>Magenta</input>
                            <input type="radio" name="pregunta2" value=4>Amarillo</input>
                        <br><br>

                        <label>3 - ¿Que me gusta menos? </label>
                            <input type="radio" name="pregunta3" value=1>Los Gnomos</input>
                            <input type="radio" name="pregunta3" value=2>Los calcetines</input>
                            <input type="radio" name="pregunta3" value=3>Los columpios</input>
                            <input type="radio" name="pregunta3" value=4>Los malditos gnomos</input>
                        <br><br>

                        <label>4 - ¿Por donde sale el sol? </label>
                                <input type="radio" name="pregunta4" value=1>Norte</input>
                                <input type="radio" name="pregunta4" value=2>Sur</input>
                                <input type="radio" name="pregunta4" value=3>Este</input>
                                <input type="radio" name="pregunta4" value=4>Oeste</input>
                        <br><br>

                        <label>5 - ¿Que prefiero? </label>
                            <input type="radio" name="pregunta5" value=1>Beber agua</option>
                            <input type="radio" name="pregunta5" value=2>Dormir</option>
                            <input type="radio" name="pregunta5" value=3>Comer</option>
                            <input type="radio" name="pregunta5" value=4>Saltar</option>
                        <br><br>

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