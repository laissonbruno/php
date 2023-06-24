<?php

$notas = [
    [
    'aluno' => 'Maria',
    'nota' => 9
    ],
    [
    'aluno' => 'Nicolas',
    'nota' => 5
    ],
    [
    'aluno' => 'Tabata',
    'nota' => 10
    ]
];

krsort($notas);
var_dump($notas);


// if (gettype($notas) === 'array' ) {
//     echo 'sim, é um array';
// }

if (is_array($notas)) {
    echo 'sim, é um array'.PHP_EOL;
}
var_dump(array_is_list($notas));
var_dump(array_key_exists('Vinicius', $notas));
var_dump(isset($notas['vinicius']));
var_dump(in_array(10, $notas));
var_dump(array_search(10, $notas));