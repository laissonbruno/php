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


function titularLetraMaiuscula(array &$conta) {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}


