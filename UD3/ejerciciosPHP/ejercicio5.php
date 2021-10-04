<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Formulario y procesamiento en un fichero</title>
</head><body>
    <h2>Formulario</h2>
    <form method="POST" action="ejercicio5Action.php">
        <label>Nombre 1</label><input type="text" value="uno" name="nombre[]"> <br>
        <label>Nombre 2</label><input type="text" value="dos" name="nombre[]"> <br>
        <label>Nombre 3</label><input type="text" value="tres" name="nombre[]"> <br>
        <input type="submit" value="enviar">
    </form>
    
    
</body></html>