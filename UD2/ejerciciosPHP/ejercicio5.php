<?php

$i = 0;
$strHTML = '';

for( $i = 1; $i < 10; $i++ ){

    if( $i % 3 == 0) {
        $strHTML .=  $i . '<br>';
    }

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo 1 cambio web</title>
<style type="text/css" media="screen">
</style>
</head>
<body>
    <?php echo $strHTML;?>
</body>
</html>