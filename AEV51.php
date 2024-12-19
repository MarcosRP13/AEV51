<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$pomodoroHaters = [
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', 'A', 'A', 'A', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'A', '0', 'A', 'A', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', 'A', 'A', '0', '0', 'A', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '0', 'A', 'A', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~']
];
$impacts = [
    [20, 4],
    [2, 13],
    [13, 12],
    [3, 17],
    [2, 13],
    [5, 19],
    [6, 18],
    [5, 2],
    [20, 13],
    [9, 7],
    [5, 9],
    [15, 16],
    [16, 13],
    [16, 9],
    [16, 0],
    [3, 19],
    [19, 8],
    [1, 16],
    [18, 4],
    [21, 23],
    [7, 17],
    [22, 15],
    [21, 6],
    [14, 8],
    [12, 23],
    [7, 7],
    [22, 4],
    [3, 21],
    [2, 3],
    [8, 11],
    [0, 4],
    [7, 21],
    [11, 4],
    [7, 15],
    [6, 17],
    [5, 19],
    [4, 19],
    [4, 7],
    [23, 21],
    [15, 20],
    [2, 9],
    [21, 2],
    [1, 13],
    [7, 10],
    [21, 5],
    [13, 17],
    [2, 14],
    [11, 14],
    [22, 17],
    [18, 22],
    [2, 23],
    [3, 1],
    [18, 6],
    [17, 12],
    [18, 18],
    [20, 2],
    [3, 14],
    [11, 21],
    [6, 5],
    [6, 2],
    [12, 23],
    [18, 18],
    [21, 6],
    [10, 12],
    [5, 4],
    [16, 19],
    [8, 10],
    [12, 21],
    [15, 1],
    [20, 14],
    [3, 20],
    [6, 19],
    [20, 13],
    [15, 4],
    [10, 2],
    [5, 16],
    [20, 1],
    [12, 13],
    [11, 5],
    [12, 14],
    [8, 3],
    [6, 8],
    [19, 7],
    [16, 9],
    [13, 20],
    [3, 5],
    [1, 0],
    [20, 14],
    [12, 21],
    [12, 16],
    [15, 7],
    [9, 1],
    [1, 18],
    [20, 6],
    [8, 6],
    [22, 1],
    [10, 22],
    [19, 19],
    [7, 16],
    [8, 8]
];

//ESCRIBE AQUÍ TU PROGRAMA PRINCIPAL

echo "MAPA ORIGINAL". "<br> <br>";

sacarMapa($pomodoroHaters);
mapaImpactos($pomodoroHaters, $impacts);
echo "<br>";
echo "MAPA IMPACTOS"."<br> <br>";

sacarMapa($pomodoroHaters);
echo "<br>";

echo "El numero de personas afectadas son: ".$personasAfectadas = calcularPersonasAfectadas($pomodoroHaters);
echo "<br>";
echo "El total de los ml de colirio es: ". $mlColirio = $personasAfectadas * 25;
echo "<br>";
echo "El total de litros: ".$litrosColirio = $mlColirio / 1000;
echo "<br>";

echo "<br>";
echo "MAPA NUEVOS IMPACTOS"."<br> <br>";

nuevosImpactos($pomodoroHaters, $impacts);
sacarMapa($pomodoroHaters);

dañototal($pomodoroHaters);

marTotal($pomodoroHaters);
   marDañado($pomodoroHaters);

pescao($pomodoroHaters);
//ESCRIBE AQUÍ LA DEFINICIÓN DE LAS FUNCIONES

function sacarMapa($mapa) {
    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            echo $celda . " "; 
        }
        echo "<br>"; 
    }
};

function mapaImpactos(&$mapa, $impactos) {
    foreach ($impactos as $impacto) {
        $fila = $impacto[0];
        $columna = $impacto[1];
        
        if ($mapa[$fila][$columna] == 'A') {
            $mapa[$fila][$columna] = 'C'; 
        }
    }
};

function calcularPersonasAfectadas($mapa) {
    $poblacionPorKm2 = 5000;
    $mlPorPersona = 25;
    $totalPersonasAfectadas = 0;
        foreach ($mapa as $fila) {
            foreach ($fila as $celda) {
              if ($celda == 'C') {
            $totalPersonasAfectadas += $poblacionPorKm2;
          }
     }
    }
    return $totalPersonasAfectadas;
};

function nuevosImpactos(&$mapa, $impactos) {
    foreach ($impactos as $impacto) {
        $fila = $impacto[0];
        $columna = $impacto[1];
        
        if ($mapa[$fila][$columna] == 'A') {
            $mapa[$fila][$columna] = 'C'; 
        }
        if ($mapa[$fila][$columna] == '0') {
            $mapa[$fila][$columna] = 'X';
        }
        if ($mapa[$fila][$columna] == '~') {
            $mapa[$fila][$columna] = 'S';
        }
    }
    
};

function dañototal($mapa){
    $noUrbana = 50000;
    $urbana = 200000;
    $cont1 = 0;
    $cont2 = 0;
    foreach ($mapa as $fila){ 
       foreach($fila as $casilla){
           if ($casilla == 'C'){
              $cont1++;}
           if ($casilla == 'X'){
            $cont2++;}
       }   
   }
   $dañoTotal= $noUrbana*$cont2 + $urbana*$cont1;
   echo"<br>DAÑOS TOTALES<br>";
   echo "Ha habido un daño total de: ".$dañoTotal. "€<br>";
};

function marTotal($mapa){
    $tamaño = 1;
    $cont1 = 0;
    $cont2 = 0;
    foreach ($mapa as $fila){ 
       foreach($fila as $casilla){
           if ($casilla === '~'){
              $cont1++;}
           if ($casilla === 'S'){
            $cont2++;}
       }   
   }
   $cont3 = $cont1+$cont2;
   $tamañototal= $tamaño*$cont3;
   echo "<br>El mar mide: ".$tamañototal . "km^2" ;
}
function mardañado($mapa){
$cont1 = 0;
foreach ($mapa as $fila){ 
   foreach($fila as $casilla){
       if ($casilla === 'S'){
        $cont1++;}
   }   
}
echo "<br>El mar ha sido afectado en un terreno total de: ".$cont1 . "km^2" ;
};

function pescao($mapa){
    $martotal = 299;
    $mardañado = 45;
    $bakalao = 2000;
    $bakalaototal = $bakalao*$mardañado/$martotal;
    $kilosbakalao = $bakalaototal*1000;
    $dinero = $kilosbakalao * 5;
    echo "<br>Hayn una cantidad de ". floor($bakalaototal) ." toneladas de pescado"; 
    echo "<br>Ganamos ". floor($dinero) ."Є vendiendo pescado"; 
    }

    function pintar($casilla){
        $class = '';
        if ($casilla === '0') {
            $class = 'tierra';
        } elseif ($casilla === 'A') {
            $class = 'urbano';
        } elseif ($casilla === '~') {
            $class = 'mar';
        } elseif ($casilla === 'C') {
            $class = 'impurb';
        }elseif ($casilla === 'X') {
            $class = 'nohabitado';
        }elseif ($casilla === 'S') {
            $class = 'mard';
        }
        return '<div class="casilla ' . $class . '"></div>';
    };
?>

</body>
</html>