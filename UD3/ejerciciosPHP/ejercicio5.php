<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Formulario y procesamiento en un fichero</title>
</head><body>
    <h2>Formulario</h2>
    <form method="POST" action="ejercicio5Action.php">
        <input type="checkbox" name="nombre[]" value="Juan"> Juan <br>
        <input type="checkbox" name="nombre[]" value="Felipe"> Felipe  <br>     
        <input type="checkbox" name="nombre[]" value="Daniel"> Daniel  <br>      
        <input type="checkbox" name="nombre[]" value="David"> David  <br>
        <input type="submit" value="enviar">
    </form>
    
    
</body></html>