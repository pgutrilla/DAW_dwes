<?php
        if(isset($_GET) && !empty($_GET)){

            $input = $_GET['input'];

            if( $input != '' ) {
                echo '<p style="color:red;"> El campo nombre es obligatorio</p>';
            } else {
                $input = '';
            }
        }
    
    ?>

<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Formulario y procesamiento en un fichero</title>
</head><body>
    <h2>Formulario</h2>
    <form method="POST" action="ejercicio3Action.php">
        <label>Nombre</label><input type="text" value="<?php echo $input; ?>" name="nombre"> <br>
        <input type="submit" value="enviar">
    </form>
    
    
</body></html>