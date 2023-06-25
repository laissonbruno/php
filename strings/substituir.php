<?php


$texto = 'Texto com qualquer coisa poxa e caramba';

str_replace('poxa', '***', $texto).PHP_EOL;

str_replace(
    ['Poxa', 'Caramba'],
    '***',
    $texto
).PHP_EOL;

str_replace(
    ['Poxa', 'Caramba'],
    ['p','c'],
    $texto
).PHP_EOL;

strtr($texto, 'poxa', '***');
strtr($texto, ['poxa' => 'p', 'caramba' => 'c']);