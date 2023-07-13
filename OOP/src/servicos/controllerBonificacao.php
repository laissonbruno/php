<?php


namespace Banco\servicos;

use Banco\Modelo\Funcionario\Funcionario;


class ControladorBonificacao {
    private $totalBonificacao = 0;
    public function adicionarBonificacao(Funcionario  $funcionario) {
        $this->totalBonificacao += $funcionario->calcularBonificacao();
    }

    public function recuperarTotal(): float {
        return $this->totalBonificacao;
    }
}