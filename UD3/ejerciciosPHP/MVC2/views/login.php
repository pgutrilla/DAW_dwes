<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Login</title>
</head><body>
    <h2>Datos de login</h2>
    <form method="POST" action="?method=auth">
        <label>Nombre</label><input type="text" value="" name="user"><br>
        <label>Contraseña</label><input type="password" value="" name="password"><br>
        <input type="submit" value="enviar">
    </form>
</body></html>