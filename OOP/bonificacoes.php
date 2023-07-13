<?php

require_once 'autoload.php';

use Banco\servicos\ControladorBonificacao;
use Banco\Modelo\CPF;
use Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->subirNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('123.951.789-11'),
    5000
);

$controlador = new ControladorBonificacao();
$controlador->adicionarBonificacao($umFuncionario);
$controlador->adicionarBonificacao($umaFuncionaria);
$controlador->adicionarBonificacao($umDiretor);

echo $controlador->recuperarTotal();
