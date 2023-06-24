<?php 


$array = [
    1,2,3,4
];

// $array = [
//     1 => 'um',
//     2 => 'dois',
//     3 => 'três',
// ];

// var_dump($array); 

$contador = 0;

foreach ($array as $numeral => $numero) {
    echo "$numeral em português é: $numero" .PHP_EOL;
    $contador++;
}

// echo "Total: $contador" . PHP_EOL;

// echo "Total: " .count($array) .PHP_EOL;
// echo "Total: " .sizeof($array) .PHP_EOL;