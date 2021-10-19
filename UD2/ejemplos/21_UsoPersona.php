<?php
    require('Persona.php');
    require('Cliente.php');
    $p1 = new Cliente ('Juan', 'García', 18, 25);
    echo "hola";
    echo $p1->saludar();
    echo "<br>";
    echo "Soy $p1";
    echo "<br>";
    echo "Mi nombre completo es ".$p1->getNombre();