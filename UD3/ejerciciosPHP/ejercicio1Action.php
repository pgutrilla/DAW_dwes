<?php
if(isset($_GET) && !empty($_GET)){
    var_dump($_GET);
}
 else {
     echo "No hemos recibido nada!";
}