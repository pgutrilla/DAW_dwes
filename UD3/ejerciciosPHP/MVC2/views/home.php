<?php
        
    ?>

<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>HOME</title>
</head><body>
    <h2>Home</h2>
    <nav style="display: flex;">
        <label>  </label>
    </nav>

    <?php
       echo $this->cookieUser;
       echo '<br><br>';
       echo $this->cookiePassword;
  ?>  
    <br><br>
    <a href="?method=logout">logout</a>
    <br><br>
    <?php echo $this->cookieDeseos;?>
    
    <form method="POST" action="?method=new">
        <label>Deseo</label><input type="text" value="" name="deseo"><br>
        <input type="submit" value="enviar">
    </form>
    
</body></html>