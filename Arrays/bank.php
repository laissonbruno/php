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

// subtração em um valor especifico dentro da lista


if (500 >= $contasCorrentes[3213511635]['saldo']) {
    echo "Você não pode sacar este valor" .PHP_EOL;
} else{
    $contasCorrentes[3213511635]['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . " " . $conta['saldo'] . PHP_EOL;
}

// apaga a variavel// nesse caso apaga o item da lista
unset ($contasCorrentes[3213511635]);