<?php


// expressões regulares

$telefones = ['(00) 99999 - 9999','(00) 92222 - 9999','(00) 93333 - 9999','(00) 94444 - 9999'];

foreach ($telefones as $telefone) {
    $regex = '/\(([0-9]{2})\) (9?[0-9]{4})/';
    $telefoneValido = preg_match($regex,'$telefone', $correspondencia);
    if ($telefoneValido) {
        echo 'Telefone válido' .PHP_EOL;
    } else {
        echo 'Telefone Inválido'.PHP_EOL;
    }

    preg_replace($regex, '(xx) \2', $telefone).PHP_EOL;
}