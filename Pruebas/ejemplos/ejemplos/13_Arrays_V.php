<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Repaso de los puntos anteriores</title>
</head><body>

<?php

//4 formas de hacer lo mismo exactamente:
    //forma1
    $jugadoresEquipo[] = 'pepe';
    $jugadoresEquipo[] = 'juan';
    //forma2
    $jugadoresEquipo = array('pepe', 'juan');
    //forma3
    $jugadoresEquipo = ['pepe', 'juan'];
    //forma4
    $jugadoresEquipo = [0 => 'pepe', 1 => 'juan'];


//inicializamos
echo "Arrays de dos dimensiones <hr>";
$filas  = [
    0 => [11, 12],
    1 => [21, 22],
    3 => [31, 32]
];

echo '<table border=1px>';
foreach ($filas as $fila ) {
    echo "<tr>";
    foreach ($fila as $celda) {
        echo "<td>$celda</td>";        
    }
    echo "</tr>";
}
echo "</table>";


echo 'Array doble inicializado en la declaración <hr>';
$ciudades = array (
    'Zaragoza' => array(
        'poblacion' => 700000,
        'gentilicio' => 'Zaragozano'
    ), 
    'Madrid' => array(
        'poblacion' => 3000000,
        'gentilicio' => 'Madrileño'
    ), 
    'Barcelona' => array(
        'poblacion' => 3000000,
        'gentilicio' => 'Barcelonés'
    ), 
    'Bilbao' => array(
        'poblacion' => 500000,
        'gentilicio' => 'Bilbaino'
    ), 
);

echo "<pre>";
print_r($ciudades);
echo "</pre>";
?>
</body></html>