<?php

// include 'funcao.php';
// require 'funcao.php';
require_once 'funcao.php';




$contasCorrentes['321351351656'] = depositar($contasCorrentes['321351351656'],900);

$contasCorrentes['321351351656'] = sacar($contasCorrentes['321351351656'],500);


titularLetraMaiuscula($contasCorrentes['321351351656']);


foreach ($contasCorrentes as $cpf => $conta) {
    exibirMensagem( $cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}