<?php

// function olaMundo(){
//     echo 'Olá mundo';
// }

// olaMundo();

function adiciona2($x) {
    return $x + 2;
}

$resultado = adiciona2(x:5);


function exibirMensagem ($mensagem){
    echo $mensagem.PHP_EOL;
}

function sacar ($conta, float $valorASacar) {
    if ($valorASacar > $conta['saldo']) {
        exibirMensagem("você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar($conta, float $valorDeposito) {
    if ($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;
    } else {
        exibirMensagem("Deposite um valor maior que 0");
    }
    
    return $conta;
}


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

$contasCorrentes['321351351656'] = depositar($contasCorrentes['321351351656'],900);

$contasCorrentes['321351351656'] = sacar($contasCorrentes['321351351656'],500);

// subtração em um valor especifico dentro da lista
// if (500 > $contasCorrentes[3213511635]['saldo']) {
//     exibirMensagem("Você não pode sacar este valor");
// } else{
//     $contasCorrentes[3213511635]['saldo'] -= 500;
// }

foreach ($contasCorrentes as $cpf => $conta) {
    exibirMensagem( $cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}

function titularLetraMaiuscula(array &$conta) {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}