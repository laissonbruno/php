<?php


require_once './src/Conta.php';
require_once './src/Titular.php';
require_once './src/CPF.php';

$Laisson = new Titular(new CPF('123.456.789-10'), 'Laisson Bruno');
$primeiraConta = new Conta($Laisson);
$primeiraConta -> depositar(valorADepositar:500);
$primeiraConta -> sacar(valorASacar:300);