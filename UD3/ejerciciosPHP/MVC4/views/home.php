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
       echo $this->sessionUser;
       echo '<br><br>';
       echo $this->sessionPassword;
  ?>  
    <br><br>
    <a href="?method=logout">logout</a>
    <br><br>
    <?php 
    
    $deseos = $this->sessionDeseos;
    $counter = 0;
    foreach( $deseos as $deseo ){
        echo $deseo . '<a href="?method=delete&indice='. $counter . '" style="color: red;"> Borrar</a></br>';   
        $counter++; 
    }

    echo '</br>'
    
    ?>
    
    <form method="POST" action="?method=new">
        <label>Deseo</label><input type="text" value="" name="deseo"><br>
        <input type="submit" value="enviar">
    </form>
    
</body></html>