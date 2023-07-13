<?php 

namespace Banco\Modelo\Funcionario;
use Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel{
    public function calcularBonificacao(): float {
        return $this->recuperarSalario() * 2;
    }

    public function PodeAutenticar(string $senha): bool {
        return $senha === '1234';
    }
}