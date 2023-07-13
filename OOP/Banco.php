<?php

require_once 'autoload.php';

use Banco\Modelo\Conta\Titular;
use Banco\Modelo\Endereco;
use Banco\Modelo\CPF;
use Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Belo Horizonte', 'bairro', 'minha rua', '100');
$Laisson = new Titular(new CPF('123.456.789-10'), 'Laisson Bruno', $endereco);
$primeiraConta = new Conta($Laisson);
$primeiraConta -> depositar(valorADepositar:500);
$primeiraConta -> sacar(valorASacar:300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;