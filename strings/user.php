<?php

$nome = 'laisson bruno';
$email = 'laisson@teste.com.br';
$senha = '123';

// substr($email, 0, 7);
// substr($email, 9);

// posição do @
$arroba = strpos($email, '@');

substr($email, 0, $arroba).PHP_EOL;
substr($email, $arroba + 1).PHP_EOL;


// for ($i = 0; $i < 3; $i++) {
//     echo $senha[$i] .PHP_EOL;
// }

strlen($senha).PHP_EOL;


if (strlen($senha) < 8) {
    echo 'senha insegura'.PHP_EOL;
}

$user = substr($email, 0, $arroba);

strtoupper($user).PHP_EOL;
strtolower($user).PHP_EOL;


list($nome, $sobrenome) = explode(' ', $nome);


$csv = 'laisson bruno, 26, laisson@teste.com.br';
explode(',', $csv);


trim($email).PHP_EOL;
