<?php

$contasCorrentes = [
    32135135 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    3213511635 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    321351351656 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}