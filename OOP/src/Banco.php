<?php


require_once './Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Laisson Bruno');
$primeiraConta -> depositar(valorADepositar:500);
$primeiraConta -> sacar(valorASacar:300);

echo $primeiraConta -> recuperarNomeTitular().PHP_EOL;
echo $primeiraConta -> recuperarCpfTitular().PHP_EOL;
echo $primeiraConta -> recuperarSaldo().PHP_EOL;